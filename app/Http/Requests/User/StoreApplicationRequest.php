<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'samabeshi_groups.*' => [
                'integer',
            ],
            'samabeshi_groups' => [
                'required',
                'array',
            ],
        ];
    }
}
