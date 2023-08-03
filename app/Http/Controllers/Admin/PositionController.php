<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePositionRequest;
use App\Http\Requests\UpdatePositionRequest;
use App\Models\Group;
use App\Models\Level;
use App\Models\Position;
use App\Models\SubGroup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class PositionController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('position_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $positions = Position::with('group', 'subGroup', 'level')->get();

        return view('admin.positions.index', compact('positions'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('position_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $groups = Group::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $subGroups = SubGroup::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $levels = Level::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.positions.create', compact('groups', 'subGroups', 'levels'));
    }

    public function store(StorePositionRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('position_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Position::create($request->validated());

        return redirect()->route(route: 'admin.position.index')
            ->with('message', 'Position created successfully.');
    }

    public function show(Position $position): View
    {
        abort_if(Gate::denies('position_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $position->load(['group', 'subGroup', 'level']);

        return view('admin.positions.show', compact('position'));
    }

    public function edit(Position $position): View
    {
        abort_if(Gate::denies('position_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $groups = Group::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $subGroups = SubGroup::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $levels = Level::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $position->load(['group', 'subGroup', 'level']);

        return view('admin.positions.edit', compact('position', 'groups', 'subGroups', 'levels'));
    }

    public function update(UpdatePositionRequest $request, Position $position): RedirectResponse
    {
        abort_if(Gate::denies('position_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $position->update($request->validated());

        return redirect()->route(route: 'admin.position.index')
            ->with('message', 'Position updated successfully.');
    }

    public function destroy(Position $position): RedirectResponse
    {
        abort_if(Gate::denies('position_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $position->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('position_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Position::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function getSubGroupsAndLevels(Request $request, $groupId)
    {
        $subGroups = SubGroup::where('group_id', $groupId)->pluck('title', 'id');
        $levels = Level::where('group_id', $groupId)->pluck('title', 'id');

        return response()->json([
            'subGroups' => $subGroups,
            'levels' => $levels,
        ]);
    }
}
