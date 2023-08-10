<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdatePasswordRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('profile_password_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins,email,' . auth('admin')->id()],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }
}
