<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFiscalYearRequest;
use App\Http\Requests\UpdateFiscalYearRequest;
use App\Models\FiscalYear;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class FiscalYearController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('fiscalYear_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fiscalYears = FiscalYear::all();

        return view('admin.fiscalYears.index', compact('fiscalYears'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('fiscalYear_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fiscalYears.create');
    }

    public function store(StoreFiscalYearRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('fiscalYear_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        FiscalYear::create($request->validated());

        return redirect()->route(route: 'admin.fiscalYear.index')
            ->with('message', 'FiscalYear created successfully.');
    }

    public function show(FiscalYear $fiscalYear): View
    {
        abort_if(Gate::denies('fiscalYear_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fiscalYears.show', compact('fiscalYear'));
    }

    public function edit(FiscalYear $fiscalYear): View
    {
        abort_if(Gate::denies('fiscalYear_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fiscalYears.edit', compact('fiscalYear'));
    }

    public function update(UpdateFiscalYearRequest $request, FiscalYear $fiscalYear): RedirectResponse
    {
        abort_if(Gate::denies('fiscalYear_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fiscalYear->update($request->validated());

        return redirect()->route(route: 'admin.fiscalYear.index')
            ->with('message', 'FiscalYear updated successfully.');
    }

    public function destroy(FiscalYear $fiscalYear): RedirectResponse
    {
        abort_if(Gate::denies('fiscalYear_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fiscalYear->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('fiscalYear_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        FiscalYear::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
