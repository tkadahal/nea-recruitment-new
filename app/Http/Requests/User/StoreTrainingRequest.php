<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'training_institute' => [
                'required',
                'string',
                'max: 255',
            ],
            'subject' => [
                'required',
                'string',
                'max: 255',
            ],
            'percentage' => [
                'nullable',
                'string',
                'max: 255',
            ],
            'date_format' => [
                'required',
            ],
            'training_from' => [
                'required',
                'string',
                'max: 255',
            ],
            'ad_training_from' => [
                'nullable',
                'date',
            ],
            'training_to' => [
                'required',
                'string',
                'max: 255',
            ],
            'ad_training_to' => [
                'nullable',
                'date',
            ],
            'certificate' => [
                'required_without:old_certificate',
                'file',
                'mimetypes:image/jpeg,image/jpg,image/png,application/pdf',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'training_institute.required' => trans('uservalidation.training_institute'),
            'subject.required' => trans('uservalidation.subject'),
            'percentage.required' => trans('uservalidation.percentage'),
            'date_format.required' => trans('uservalidation.date_format'),
            'training_from.required' => trans('uservalidation.training_from'),
            'training_to.required' => trans('uservalidation.training_to'),
            'certificate.required_without' => trans('uservalidation.certificate'),
            'certificate.mimetypes' => trans('uservalidation.certificate_mime'),
            'certificate.max' => trans('uservalidation.certificate_max'),
        ];
    }
}
