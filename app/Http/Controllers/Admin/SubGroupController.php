<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubGroupRequest;
use App\Http\Requests\UpdateSubGroupRequest;
use App\Models\Group;
use App\Models\SubGroup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class SubGroupController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('subGroup_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subGroups = SubGroup::with('group')->get();

        return view('admin.subGroups.index', compact('subGroups'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('subGroup_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $groups = Group::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.subGroups.create', compact('groups'));
    }

    public function store(StoreSubGroupRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('subGroup_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        SubGroup::create($request->validated());

        return redirect()->route(route: 'admin.subGroup.index')
            ->with('message', 'SubGroup created successfully.');
    }

    public function show(SubGroup $subGroup): View
    {
        abort_if(Gate::denies('subGroup_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subGroup->load('group');

        return view('admin.subGroups.show', compact('subGroup'));
    }

    public function edit(SubGroup $subGroup): View
    {
        abort_if(Gate::denies('subGroup_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $groups = Group::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $subGroup->load('group');

        return view('admin.subGroups.edit', compact('subGroup', 'groups'));
    }

    public function update(UpdateSubGroupRequest $request, SubGroup $subGroup): RedirectResponse
    {
        abort_if(Gate::denies('subGroup_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subGroup->update($request->validated());

        return redirect()->route(route: 'admin.subGroup.index')
            ->with('message', 'SubGroup updated successfully.');
    }

    public function destroy(SubGroup $subGroup): RedirectResponse
    {
        abort_if(Gate::denies('subGroup_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subGroup->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('subGroup_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        SubGroup::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
