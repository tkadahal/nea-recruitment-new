<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreApplicationFeeRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('applicationFee_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max: 255',
            ],
            'open' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'female' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'janajati' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'madhesi' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'dalit' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'disabled' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'rural' => [
                'required',
                'integer',
                'not_in:0',
            ],
        ];
    }
}
