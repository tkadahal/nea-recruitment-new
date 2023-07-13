<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'perma_province' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'perma_district' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'perma_municipality' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'perma_tol' => [
                'required',
                'string',
                'max:255',
            ],
            'perma_ward_number' => [
                'required',
                'integer',
            ],
            'temp_province' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'temp_district' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'temp_municipality' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'temp_tol' => [
                'required',
                'string',
                'max:255',
            ],
            'temp_ward_number' => [
                'required',
                'integer',
            ],
            'phone_number' => [
                'nullable',
            ],
            'father_name' => [
                'required',
                'string',
                'max: 255',
            ],
            'father_country_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'mother_name' => [
                'required',
                'string',
                'max: 255',
            ],
            'mother_country_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'grandfather_name' => [
                'required',
                'string',
                'max: 255',
            ],
            'grandfather_country_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'spouse_name' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'spouse_country_id' => [
                'nullable',
                'integer',
                'not_in:0',
            ],
        ];
    }
}
