<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'exam_center_id' => [
                'nullable',
                'integer',
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
                'required',
                'array',
            ],
        ];
    }
}
