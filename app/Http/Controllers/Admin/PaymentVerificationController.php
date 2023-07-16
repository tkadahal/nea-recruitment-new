<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentVerificationRequest;
use App\Models\PaymentVerification;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\Response;

class PaymentVerificationController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('paymentVerification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentVerifications = PaymentVerification::all();

        return view('admin.paymentVerifications.index', compact('paymentVerifications'));
    }

    public function create(): View
    {
        abort_if(Gate::denies('paymentVerification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentVerifications.create');
    }

    public function store(StorePaymentVerificationRequest $request): RedirectResponse
    {
        abort_if(Gate::denies('paymentVerification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $action = $request->action;

        $paymentVerifications = [];

        switch ($action) {
            case 'verify':
                $paymentVerifications['is_checked'] = 1;
                $paymentVerifications['checker'] = auth('admin')->id();
                $paymentVerifications['checked_at'] = Carbon::now();
                break;
            case 'approve':
                $paymentVerifications['is_approved'] = 1;
                $paymentVerifications['approver'] = auth('admin')->id();
                $paymentVerifications['approved_at'] = Carbon::now();
                break;
            case 'reject':
                $paymentVerifications['is_rejected'] = 1;
                $paymentVerifications['rejector'] = auth('admin')->id();
                $paymentVerifications['rejected_at'] = Carbon::now();
                break;
            case 'back':
                $paymentVerifications['is_approved'] = 0;
                $paymentVerifications['is_checked'] = 0;
                $paymentVerifications['approver'] = null;
                $paymentVerifications['checker'] = null;
                break;
            default:
                // Handle unknown action
                break;
        }

        PaymentVerification::updateOrCreate(
            ['payment_id' => $request->payment_id],
            $paymentVerifications
        );

        return redirect()->route(route: 'admin.application.index')
            ->with('message', 'Application Verified successfully.');
    }

    public function show(PaymentVerification $paymentVerification): View
    {
        abort_if(Gate::denies('paymentVerification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentVerifications.show', compact('paymentVerification'));
    }

    public function edit(PaymentVerification $paymentVerification): View
    {
        abort_if(Gate::denies('paymentVerification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.paymentVerifications.edit', compact('paymentVerification'));
    }

    public function update(Request $request, PaymentVerification $paymentVerification): RedirectResponse
    {
        abort_if(Gate::denies('paymentVerification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentVerification->update($request->validated());

        return redirect()->route(route: 'admin.paymentVerification.index')
            ->with('message', 'PaymentVerification updated successfully.');
    }

    public function destroy(PaymentVerification $paymentVerification): RedirectResponse
    {
        abort_if(Gate::denies('paymentVerification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentVerification->delete();

        return back();
    }

    public function massDestroy(Request $request): Response
    {
        abort_if(Gate::denies('paymentVerification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        PaymentVerification::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
