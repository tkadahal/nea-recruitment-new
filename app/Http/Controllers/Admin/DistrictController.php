<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDistrictRequest;
use App\Http\Requests\UpdateDistrictRequest;
use App\Models\District;
use App\Models\Province;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class DistrictController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('district_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $districts = District::with('province')->get();

        return view('admin.districts.index', compact('districts'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('district_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $provinces = Province::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.districts.create', compact('provinces'));
    }

    public function store(StoreDistrictRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('district_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        District::create($request->validated());

        return redirect()->route(route: 'admin.district.index')
            ->with('message', 'District created successfully.');
    }

    public function show(District $district): View
    {
        abort_if(Gate::denies('district_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $district->load('province');

        return view('admin.districts.show', compact('district'));
    }

    public function edit(District $district): View
    {
        abort_if(Gate::denies('district_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $provinces = Province::all()->pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $district->load('province');

        return view('admin.districts.edit', compact('district', 'provinces'));
    }

    public function update(UpdateDistrictRequest $request, District $district): RedirectResponse
    {
        abort_if(Gate::denies('district_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $district->update($request->validated());

        return redirect()->route(route: 'admin.district.index')
            ->with('message', 'District updated successfully.');
    }

    public function destroy(District $district): RedirectResponse
    {
        abort_if(Gate::denies('district_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $district->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('district_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        District::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
