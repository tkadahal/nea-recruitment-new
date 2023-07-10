<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSamabeshiGroupRequest;
use App\Http\Requests\UpdateSamabeshiGroupRequest;
use App\Models\SamabeshiGroup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class SamabeshiGroupController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('samabeshiGroup_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $samabeshiGroups = SamabeshiGroup::all();

        return view('admin.samabeshiGroups.index', compact('samabeshiGroups'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('samabeshiGroup_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.samabeshiGroups.create');
    }

    public function store(StoreSamabeshiGroupRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('samabeshiGroup_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        SamabeshiGroup::create($request->validated());

        return redirect()->route(route: 'admin.samabeshiGroup.index')
            ->with('message', 'SamabeshiGroup created successfully.');
    }

    public function show(SamabeshiGroup $samabeshiGroup): View
    {
        abort_if(Gate::denies('samabeshiGroup_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.samabeshiGroups.show', compact('samabeshiGroup'));
    }

    public function edit(SamabeshiGroup $samabeshiGroup): View
    {
        abort_if(Gate::denies('samabeshiGroup_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.samabeshiGroups.edit', compact('samabeshiGroup'));
    }

    public function update(UpdateSamabeshiGroupRequest $request, SamabeshiGroup $samabeshiGroup): RedirectResponse
    {
        abort_if(Gate::denies('samabeshiGroup_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $samabeshiGroup->update($request->validated());

        return redirect()->route(route: 'admin.samabeshiGroup.index')
            ->with('message', 'SamabeshiGroup updated successfully.');
    }

    public function destroy(SamabeshiGroup $samabeshiGroup): RedirectResponse
    {
        abort_if(Gate::denies('samabeshiGroup_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $samabeshiGroup->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('samabeshiGroup_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        SamabeshiGroup::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
