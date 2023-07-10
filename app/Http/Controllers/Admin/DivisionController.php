<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDivisionRequest;
use App\Http\Requests\UpdateDivisionRequest;
use App\Models\Division;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class DivisionController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('division_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $divisions = Division::all();

        return view('admin.divisions.index', compact('divisions'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('division_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.divisions.create');
    }

    public function store(StoreDivisionRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('division_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Division::create($request->validated());

        return redirect()->route(route: 'admin.division.index')
            ->with('message', 'Division created successfully.');
    }

    public function show(Division $division): View
    {
        abort_if(Gate::denies('division_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.divisions.show', compact('division'));
    }

    public function edit(Division $division): View
    {
        abort_if(Gate::denies('division_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.divisions.edit', compact('division'));
    }

    public function update(UpdateDivisionRequest $request, Division $division): RedirectResponse
    {
        abort_if(Gate::denies('division_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $division->update($request->validated());

        return redirect()->route(route: 'admin.division.index')
            ->with('message', 'Division updated successfully.');
    }

    public function destroy(Division $division): RedirectResponse
    {
        abort_if(Gate::denies('division_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $division->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('division_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Division::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
