<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StorePositionRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('position_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'group_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'sub_group_id' => [
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
