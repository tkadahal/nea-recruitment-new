<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdatePositionRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('position_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'category_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'group_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'level_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'title' => [
                'required',
                'string',
                'max:255',
            ],
        ];
    }
}
