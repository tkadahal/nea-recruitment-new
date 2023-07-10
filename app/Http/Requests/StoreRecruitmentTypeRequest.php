<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class StoreRecruitmentTypeRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('recruitmentType_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'title_en' => [
                'required',
                'string',
                'max: 255',
            ],
            'title_np' => [
                'required',
                'string',
                'max: 255',
            ],
        ];
    }
}
