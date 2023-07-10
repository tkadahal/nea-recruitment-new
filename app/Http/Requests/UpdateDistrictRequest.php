<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdateDistrictRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('district_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'province_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'title' => [
                'required',
                'string',
                'max:255',
            ],
        ];
    }
}
