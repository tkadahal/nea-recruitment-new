<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UpdateAdvertisementRequest extends FormRequest
{
    public function authorize(): bool
    {
        abort_if(Gate::denies('advertisement_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules(): array
    {
        return [
            'fiscal_year_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'exam_center_id' => [
                'nullable',
                'integer',
            ],
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
            'category_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'level_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'position_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'designation_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'open_fee' => [
                'required',
                'integer',
                'min:0',
            ],
            'samabeshi_fee' => [
                'nullable',
                'integer',
                'min:0',
            ],
            'training_period' => [
                'nullable',
                'integer',
                'min:0',
            ],
            'experience_period' => [
                'nullable',
                'integer',
                'min:0',
            ],
            'experience_calculation_period' => [
                'nullable',
                'integer',
                'min:0',
            ],
            'qualification_id' => [
                'required',
                'integer',
                'not_in:0',
            ],
            'advertisement_num' => [
                'required',
                'string',
                'max:255',
            ],
            'start_date_np' => [
                'required',
                'string',
                'max: 255',
            ],
            'start_date_en' => [
                'required',
                'date',
            ],
            'end_date_np' => [
                'required',
                'string',
                'max: 255',
            ],
            'end_date_en' => [
                'required',
                'string',
                'max: 255',
            ],
            'penalty_end_date_np' => [
                'required',
                'string',
                'max: 255',
            ],
            'penalty_end_date_en' => [
                'required',
                'date',
            ],
            'samabeshi_groups' => [
                'required',
                'array',
            ],
            'samabeshi_groups.*' => [
                'required',
                'exists:samabeshi_groups,id',
            ],
            'samabeshi_groups_input.*' => [
                'required',
                'nullable',
                'integer',
                'min:0',
            ]
        ];
    }
}
