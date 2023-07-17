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
            'sameAsPermanent' => [
                'nullable',
                'boolean',
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
            'contact_person_name' => [
                'required',
                'string',
                'max: 255',
            ],
            'contact_person_number' => [
                'required',
                'string',
                'max: 255',
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

    public function messages(): array
    {
        return [
            'perma_province.required' => trans('uservalidation.permaProvince'),
            'perma_district.required' => trans('uservalidation.permaDistrict'),
            'perma_municipality.required' => trans('uservalidation.permaMunicipality'),
            'perma_ward_number.required' => trans('uservalidation.permaWardNumber'),
            'perma_tol.required' => trans('uservalidation.permaTol'),
            'temp_province.required' => trans('uservalidation.tempProvince'),
            'temp_district.required' => trans('uservalidation.tempDistrict'),
            'temp_municipality.required' => trans('uservalidation.tempMunicipality'),
            'temp_ward_number.required' => trans('uservalidation.tempWardNumber'),
            'temp_tol.required' => trans('uservalidation.tempTol'),
            'contact_person_name.required' => trans('uservalidation.contactPersonName'),
            'contact_person_number.required' => trans('uservalidation.contactPersonNumber'),
            'father_name.required' => trans('uservalidation.fatherName'),
            'father_country_id.required' => trans('uservalidation.fatherCountry'),
            'mother_name.required' => trans('uservalidation.motherName'),
            'mother_country_id.required' => trans('uservalidation.motherCountry'),
            'grandfather_name.required' => trans('uservalidation.grandfatherName'),
            'grandfather_country_id.required' => trans('uservalidation.grandfatherCountry'),
        ];
    }
}
