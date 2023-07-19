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
        dd($this->request->all());
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
                'max: 255',
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
                'mimetypes:application/pdf',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
            'job_description' => [
                'nullable',
            ],
        ];
    }
}
