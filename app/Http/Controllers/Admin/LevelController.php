<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use App\Models\Group;
use App\Models\Level;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class LevelController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('level_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $levels = Level::with('group')->get();

        return view('admin.levels.index', compact('levels'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('level_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $groups = Group::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.levels.create', compact('groups'));
    }

    public function store(StoreLevelRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('level_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Level::create($request->validated());

        return redirect()->route(route: 'admin.level.index')
            ->with('message', 'Level created successfully.');
    }

    public function show(Level $level): View
    {
        abort_if(Gate::denies('level_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $level->load('group');

        return view('admin.levels.show', compact('level'));
    }

    public function edit(Level $level): View
    {
        abort_if(Gate::denies('level_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $groups = Group::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $level->load('group');

        return view('admin.levels.edit', compact('level', 'groups'));
    }

    public function update(UpdateLevelRequest $request, Level $level): RedirectResponse
    {
        abort_if(Gate::denies('level_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $level->update($request->validated());

        return redirect()->route(route: 'admin.level.index')
            ->with('message', 'Level updated successfully.');
    }

    public function destroy(Level $level): RedirectResponse
    {
        abort_if(Gate::denies('level_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $level->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('level_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Level::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
