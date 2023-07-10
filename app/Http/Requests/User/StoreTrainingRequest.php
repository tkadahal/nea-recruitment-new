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
                'required',
                'string',
                'max: 255',
            ],
            'training_from' => [
                'required',
                'string',
                'max: 255',
            ],
            'training_to' => [
                'required',
                'string',
                'max: 255',
            ],
            'certificate' => [
                'required_without:old_certificate',
                'file',
                'mimetypes:application/pdf',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
        ];
    }
}
