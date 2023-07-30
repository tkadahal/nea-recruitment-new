<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Payment;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\PaymentVerification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StorePaymentVerificationRequest;

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
        // abort_if(Gate::denies('paymentVerification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $action = $request->action;

        $paymentVerifications = [];

        $fiscalYear = Payment::find($request->payment_id)?->application?->advertisement?->fiscal_year_id ?? null;

        switch ($action) {
            case 'verify':
                $paymentVerifications['is_checked'] = true;
                $paymentVerifications['checker'] = auth('admin')->id();
                $paymentVerifications['checked_at'] = Carbon::now();
                break;
            case 'approve':
                $paymentVerifications['is_approved'] = true;
                $paymentVerifications['approver'] = auth('admin')->id();
                $paymentVerifications['approved_at'] = Carbon::now();
                break;
            case 'reject':
                $paymentVerifications['is_rejected'] = true;
                $paymentVerifications['rejector'] = auth('admin')->id();
                $paymentVerifications['rejected_at'] = Carbon::now();
                break;
            case 'back':
                $paymentVerifications['is_approved'] = false;
                $paymentVerifications['is_checked'] = false;
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

        return redirect()->route('admin.application.show', ['id' => $fiscalYear])
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

    public function generateCardForExamCenter(Request $request, $advertisementId)
    {
        $payments = Payment::query()
            ->with('application.user', 'application.user.media', 'application.advertisement')
            ->whereHas('application', function ($query) use ($advertisementId) {
                $query->where('advertisement_id', $advertisementId);
            })
            ->where('payment_status', '1')
            ->whereHas('paymentVerification', function ($query) {
                $query->where('is_approved', true);
            })
            ->paginate(10);

        return view('admin.applications.examCenterCards', compact('payments', 'advertisementId'));
    }
}
