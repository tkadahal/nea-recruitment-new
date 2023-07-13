<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentVendorRequest;
use App\Http\Requests\UpdatePaymentVendorRequest;
use App\Models\PaymentVendor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class PaymentVendorController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('paymentVendor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentVendors = PaymentVendor::all();

        return view('admin.paymentVendors.index', compact('paymentVendors'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('paymentVendor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentVendors.create');
    }

    public function store(StorePaymentVendorRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('paymentVendor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        PaymentVendor::create($request->validated());

        return redirect()->route(route: 'admin.paymentVendor.index')
            ->with('message', 'PaymentVendor created successfully.');
    }

    public function show(PaymentVendor $paymentVendor): View
    {
        abort_if(Gate::denies('paymentVendor_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentVendors.show', compact('paymentVendor'));
    }

    public function edit(PaymentVendor $paymentVendor): View
    {
        abort_if(Gate::denies('paymentVendor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentVendors.edit', compact('paymentVendor'));
    }

    public function update(UpdatePaymentVendorRequest $request, PaymentVendor $paymentVendor): RedirectResponse
    {
        abort_if(Gate::denies('paymentVendor_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentVendor->update($request->validated());

        return redirect()->route(route: 'admin.paymentVendor.index')
            ->with('message', 'PaymentVendor updated successfully.');
    }

    public function destroy(PaymentVendor $paymentVendor): RedirectResponse
    {
        abort_if(Gate::denies('paymentVendor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentVendor->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('paymentVendor_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        PaymentVendor::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
