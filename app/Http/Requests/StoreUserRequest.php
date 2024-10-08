<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'exam_center_id' => [
                'nullable',
                'integer',
                'not_in:0',
            ],
            'name' => [
                'required',
                'string',
                'max: 250',
            ],
            'email' => [
                'required',
                'email',
            ],
            'mobile_number' => [
                'required',
            ],
            'password' => [
                'required',
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'advertisements.*' => [
                'integer',
            ],
            'advertisements' => [
                'nullable',
                'array',
            ],
        ];
    }
}
