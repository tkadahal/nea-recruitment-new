<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProvinceRequest;
use App\Http\Requests\UpdateProvinceRequest;
use App\Models\Province;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ProvinceController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('province_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $provinces = Province::all();

        return view('admin.provinces.index', compact('provinces'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('province_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.provinces.create');
    }

    public function store(StoreProvinceRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('province_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Province::create($request->validated());

        return redirect()->route(route: 'admin.province.index')
            ->with('message', 'Province created successfully.');
    }

    public function show(Province $province): View
    {
        abort_if(Gate::denies('province_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.provinces.show', compact('province'));
    }

    public function edit(Province $province): View
    {
        abort_if(Gate::denies('province_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.provinces.edit', compact('province'));
    }

    public function update(UpdateProvinceRequest $request, Province $province): RedirectResponse
    {
        abort_if(Gate::denies('province_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $province->update($request->validated());

        return redirect()->route(route: 'admin.province.index')
            ->with('message', 'Province updated successfully.');
    }

    public function destroy(Province $province): RedirectResponse
    {
        abort_if(Gate::denies('province_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $province->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('province_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Province::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
