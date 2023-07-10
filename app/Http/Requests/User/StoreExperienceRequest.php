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
                'max: 255',
            ],
            'recruitment_type_id' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'start_date' => [
                'required',
                'string',
                'max: 255',
            ],
            'end_date' => [
                'required',
                'string',
                'max: 255',
            ],
            'experience_certificate' => [
                'required_without:old_experience',
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
