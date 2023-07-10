<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDesignationRequest;
use App\Http\Requests\UpdateDesignationRequest;
use App\Models\Designation;
use App\Models\Gender;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class DesignationController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('designation_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $designations = Designation::with('gender')->get();

        return view('admin.designations.index', compact('designations'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('designation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $genders = Gender::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.designations.create', compact('genders'));
    }

    public function store(StoreDesignationRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('designation_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $designation = Designation::create($request->validated());

        return redirect()->route(route: 'admin.designation.index')
            ->with('message', 'Designation created successfully.');
    }

    public function show(Designation $designation): View
    {
        abort_if(Gate::denies('designation_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $designation->load('gender');

        return view('admin.designations.show', compact('designation'));
    }

    public function edit(Designation $designation): View
    {
        abort_if(Gate::denies('designation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $genders = Gender::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $designation->load('gender');

        return view('admin.designations.edit', compact('designation', 'genders'));
    }

    public function update(UpdateDesignationRequest $request, Designation $designation): RedirectResponse
    {
        abort_if(Gate::denies('designation_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $designation->update($request->validated());

        return redirect()->route(route: 'admin.designation.index')
            ->with('message', 'Designation updated successfully.');
    }

    public function destroy(Designation $designation): RedirectResponse
    {
        abort_if(Gate::denies('designation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $designation->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('designation_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Designation::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
