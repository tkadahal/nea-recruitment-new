<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicationFeeRequest;
use App\Http\Requests\UpdateApplicationFeeRequest;
use App\Models\ApplicationFee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class ApplicationFeeController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('applicationFee_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicationFees = ApplicationFee::all();

        return view('admin.applicationFees.index', compact('applicationFees'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('applicationFee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.applicationFees.create');
    }

    public function store(StoreApplicationFeeRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('applicationFee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        ApplicationFee::create($request->validated());

        return redirect()->route(route: 'admin.applicationFee.index')
            ->with('message', 'ApplicationFee created successfully.');
    }

    public function show(ApplicationFee $applicationFee): View
    {
        abort_if(Gate::denies('applicationFee_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.applicationFees.show', compact('applicationFee'));
    }

    public function edit(ApplicationFee $applicationFee): View
    {
        abort_if(Gate::denies('applicationFee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.applicationFees.edit', compact('applicationFee'));
    }

    public function update(UpdateApplicationFeeRequest $request, ApplicationFee $applicationFee): RedirectResponse
    {
        abort_if(Gate::denies('applicationFee_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicationFee->update($request->validated());

        return redirect()->route(route: 'admin.applicationFee.index')
            ->with('message', 'ApplicationFee updated successfully.');
    }

    public function destroy(ApplicationFee $applicationFee): RedirectResponse
    {
        abort_if(Gate::denies('applicationFee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $applicationFee->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('applicationFee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        ApplicationFee::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
