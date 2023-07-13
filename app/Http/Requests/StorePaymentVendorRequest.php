<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StorePaymentVendorRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('paymentVendor_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'payment_gateway' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'merchant_id' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'merchant_code' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'app_id' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'app_name' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'token_url' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'checkout_url' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'verify_url' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'recheck_url' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'username' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'verify_password' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'cert_password' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'public_key' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'secret_key' => [
                'nullable',
                'string',
                'max: 255',
            ],
        ];
    }
}
