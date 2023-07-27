<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user_id' => [
                'nullable',
                'integer',
            ],
            'admin_id' => [
                'nullable',
                'integer',
            ],
            'title' => [
                'required',
                'string',
                'max: 255',
            ],
            'description' => [
                'nullable',
            ],
        ];
    }
}
