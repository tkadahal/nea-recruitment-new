<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreDivisionRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('division_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max: 255',
            ],
        ];
    }
}
