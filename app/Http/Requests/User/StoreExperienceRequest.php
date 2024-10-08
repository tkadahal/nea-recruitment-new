<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreExperienceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'office' => [
                'required',
                'string',
                'max: 255',
            ],
            'post' => [
                'required',
                'string',
                'max: 255',
            ],
            'level' => [
                'required',
                'integer',
                'min: 1',
            ],
            'recruitment_type_id' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'date_format' => [
                'required',
            ],
            'start_date' => [
                'required',
                'string',
                'max: 255',
            ],
            'ad_experience_from' => [
                'nullable',
                'date',
            ],
            'end_date' => [
                'required',
                'string',
                'max: 255',
            ],
            'ad_experience_to' => [
                'nullable',
                'date',
            ],
            'experience_certificate' => [
                'required_without:old_experience_certificate',
                'file',
                'mimetypes:image/jpeg,image/jpg,image/png,application/pdf',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
            'job_description' => [
                'nullable',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'office.required' => trans('uservalidation.office'),
            'post.required' => trans('uservalidation.post'),
            'level.required' => trans('uservalidation.level'),
            'recruitment_type_id.required' => trans('uservalidation.recruitment_type_id'),
            'date_format.required' => trans('uservalidation.date_format'),
            'start_date.required' => trans('uservalidation.start_date'),
            'end_date.required' => trans('uservalidation.end_date'),
            'experience_certificate.required_without' => trans('uservalidation.experience_certificate'),
            'experience_certificate.mimetypes' => trans('uservalidation.experience_certificate_mime'),
            'experience_certificate.max' => trans('uservalidation.experience_certificate_max'),
        ];
    }
}
