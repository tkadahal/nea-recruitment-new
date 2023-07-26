<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Models\MediaType;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\PaymentVendor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StorePaymentVendorRequest;
use App\Http\Requests\UpdatePaymentVendorRequest;

class PaymentVendorController extends Controller
{
    public function index(): View
    {
        abort_if(Gate::denies('paymentVendor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $paymentVendors = PaymentVendor::orderBy('payment_gateway')->get();

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

        $mediaTypes = [
            MediaType::paymentVendorImage,
            MediaType::paymentVendorCertificate,
        ];

        $paymentVendor = PaymentVendor::create($request->validated());

        foreach ($mediaTypes as $mediaTypeId) {
            $mediaPath = $this->mediaService->handleMediaFromRequest(
                $request->file($this->getInputNameByMediaType($mediaTypeId)),
                auth()->user('admin')->id,
                $mediaTypeId
            );

            if ($mediaPath) {
                $paymentVendor->media()->create($mediaPath);
            }
        }

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

        $mediaTypes = [
            MediaType::paymentVendorImage,
            MediaType::paymentVendorCertificate,
        ];

        $existingMedia = $paymentVendor->media()->whereIn('media_type_id', $mediaTypes)->get()->keyBy('media_type_id');

        foreach ($mediaTypes as $mediaTypeId) {
            $mediaPath = $this->mediaService->handleMediaFromRequest(
                $request->file($this->getInputNameByMediaType($mediaTypeId)),
                auth()->user('admin')->id,
                $mediaTypeId,
                $existingMedia->get($mediaTypeId)
            );

            if ($mediaPath) {
                $paymentVendor->media()->updateOrCreate(['id' => optional($existingMedia->get($mediaTypeId))->id], $mediaPath);
            }
        }

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


    private function getInputNameByMediaType(int $mediaTypeId): string
    {
        return match ($mediaTypeId) {
            MediaType::paymentVendorImage => 'image',
            MediaType::paymentVendorCertificate => 'certificate',
            default => throw new \InvalidArgumentException("Invalid media type ID: {$mediaTypeId}"),
        };
    }
}
