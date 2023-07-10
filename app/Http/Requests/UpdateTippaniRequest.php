<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rules\File;
use Symfony\Component\HttpFoundation\Response;

class UpdateTippaniRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('tippani_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'fiscal_year_id' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'category_id' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'title' => [
                'required',
                'string',
                'max: 250',
            ],
            'description' => [
                'nullable',
            ],
            'document.*' => [
                'required',
                File::types(['pdf'])
                    ->max(10 * 1024),
            ],
        ];
    }
}
