<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSewaRequest;
use App\Http\Requests\UpdateSewaRequest;
use App\Models\Sewa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class SewaController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('sewa_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sewas = Sewa::all();

        return view('admin.sewas.index', compact('sewas'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('sewa_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sewas.create');
    }

    public function store(StoreSewaRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('sewa_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sewa = Sewa::create($request->validated());

        return redirect()->route(route: 'admin.sewa.index')
            ->with('message', 'Sewa created successfully.');
    }

    public function show(Sewa $sewa): View
    {
        abort_if(Gate::denies('sewa_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sewas.show', compact('sewa'));
    }

    public function edit(Sewa $sewa): View
    {
        abort_if(Gate::denies('sewa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sewas.edit', compact('sewa'));
    }

    public function update(UpdateSewaRequest $request, Sewa $sewa): RedirectResponse
    {
        abort_if(Gate::denies('sewa_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sewa->update($request->validated());

        return redirect()->route(route: 'admin.sewa.index')
            ->with('message', 'Sewa updated successfully.');
    }

    public function destroy(Sewa $sewa): RedirectResponse
    {
        abort_if(Gate::denies('sewa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sewa->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('sewa_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Sewa::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
