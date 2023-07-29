<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StorePaymentVerificationRequest extends FormRequest
{
    public function authorize(): bool
    {
        // abort_if(Gate::denies('paymentVerification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'action' => [
                'required',
                'string',
            ],
            'payment_id' => [
                'nullable',
                'integer',
                'not_in:0',
            ],
            'is_checked' => [
                'nullable',
                'integer',
            ],
            'is_approved' => [
                'nullable',
                'integer',
            ],
            'is_rejected' => [
                'nullable',
                'integer',
            ],
            'checker' => [
                'nullable',
            ],
            'approver' => [
                'nullable',
            ],
            'rejector' => [
                'nullable',
            ],
            'checked_at' => [
                'nullable',
            ],
            'approved_at' => [
                'nullable',
            ],
            'rejected_at' => [
                'nullable',
            ],
        ];
    }
}
