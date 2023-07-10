<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonalRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max: 255',
            ],
            'name_np' => [
                'required',
                'string',
                'max: 255',
            ],
            'mobile_number' => [
                'required',
                'string',
                'regex:/^[0-9]{10}$/',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'dob_np' => [
                'required',
            ],
            'dob_en' => [
                'required',
            ],
            'gender_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'citizenship_number' => [
                'required',
                'string',
                'max: 255',
            ],
            'citizenship_district_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'citizenship_issued_date' => [
                'required',
            ],
            'sanket_num' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'is_handicapped' => [
                'nullable',
                'integer',
            ],
            // 'photo' => [
            //     'required',
            //     'image',
            //     File::types(['png', 'jpg', 'jpeg', 'gif', 'tif', 'pdf'])
            //         ->max(5 * 1024),
            // ],
            // 'sign' => [
            //     'required',
            //     'image',
            //     File::types(['png', 'jpg', 'jpeg', 'gif', 'tif', 'pdf'])
            //         ->max(5 * 1024),
            // ],
            // 'citizenship_front' => [
            //     'required',
            //     'image',
            //     File::types(['png', 'jpg', 'jpeg', 'gif', 'tif', 'pdf'])
            //         ->max(5 * 1024),
            // ],
            // 'citizenship_back' => [
            //     'required',
            //     'image',
            //     File::types(['png', 'jpg', 'jpeg', 'gif', 'tif', 'pdf'])
            //         ->max(5 * 1024),
            // ],
        ];
    }

    public function messages(): array
    {
        return [
            'gender_id.required' => trans('uservalidation.gender'),
            'name_np.required' => trans('uservalidation.name(NP)'),
            'name.required' => trans('uservalidation.name(EN)'),
            'dob_np.required' => trans('uservalidation.dob(BS)'),
            'dob_en.required' => trans('uservalidation.dob(AD)'),
            'mobile_number.required' => trans('uservalidation.mobile'),
            'email.required' => trans('uservalidation.email'),
            'citizenship_number.required' => trans('uservalidation.citizenship_number'),
            'citizenship_district_id.required' => trans('uservalidation.citizenship_district'),
            'citizenship_issued_date.required' => trans('uservalidation.citizenship_date'),
        ];
    }
}
