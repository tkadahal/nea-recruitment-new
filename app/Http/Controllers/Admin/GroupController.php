<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class GroupController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('group_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $groups = Group::all();

        return view('admin.groups.index', compact('groups'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('group_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.groups.create');
    }

    public function store(StoreGroupRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('group_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Group::create($request->validated());

        return redirect()->route(route: 'admin.group.index')
            ->with('message', 'group created successfully.');
    }

    public function show(group $group): View
    {
        abort_if(Gate::denies('group_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.groups.show', compact('group'));
    }

    public function edit(group $group): View
    {
        abort_if(Gate::denies('group_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.groups.edit', compact('group'));
    }

    public function update(UpdateGroupRequest $request, group $group): RedirectResponse
    {
        abort_if(Gate::denies('group_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $group->update($request->validated());

        return redirect()->route(route: 'admin.group.index')
            ->with('message', 'group updated successfully.');
    }

    public function destroy(Group $group): RedirectResponse
    {
        abort_if(Gate::denies('group_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $group->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('group_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Group::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
