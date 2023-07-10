<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMunicipalityRequest;
use App\Http\Requests\UpdateMunicipalityRequest;
use App\Models\District;
use App\Models\Municipality;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class MunicipalityController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('municipality_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $municipalities = Municipality::with('district')->get();

        return view('admin.municipalities.index', compact('municipalities'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('municipality_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $districts = District::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.municipalities.create', compact('districts'));
    }

    public function store(StoreMunicipalityRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('municipality_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Municipality::create($request->validated());

        return redirect()->route(route: 'admin.municipality.index')
            ->with('message', 'Municipality created successfully.');
    }

    public function show(Municipality $municipality): View
    {
        abort_if(Gate::denies('municipality_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $municipality->load('district');

        return view('admin.municipalities.show', compact('municipality'));
    }

    public function edit(Municipality $municipality): View
    {
        abort_if(Gate::denies('municipality_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $districts = District::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $municipality->load('district');

        return view('admin.municipalities.edit', compact('districts', 'municipality'));
    }

    public function update(UpdateMunicipalityRequest $request, Municipality $municipality): RedirectResponse
    {
        abort_if(Gate::denies('municipality_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $municipality->update($request->validated());

        return redirect()->route(route: 'admin.municipality.index')
            ->with('message', 'Municipality updated successfully.');
    }

    public function destroy(Municipality $municipality): RedirectResponse
    {
        abort_if(Gate::denies('municipality_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $municipality->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('municipality_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Municipality::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
