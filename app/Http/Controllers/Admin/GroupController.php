<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use Symfony\Component\HttpFoundation\Response;

class GroupController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('group_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $groups = Group::with('category')->get();

        return view('admin.groups.index', compact('groups'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('group_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.groups.create', compact('categories'));
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

        $group->load('category');

        return view('admin.groups.show', compact('group'));
    }

    public function edit(group $group): View
    {
        abort_if(Gate::denies('group_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = Category::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $group->load('category');

        return view('admin.groups.edit', compact('group', 'categories'));
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
