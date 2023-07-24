<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreEducationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'institution' => [
                'required',
                'string',
                'max: 255',
            ],
            'university_id' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'qualification_id' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'division_id' => [
                'required',
                'integer',
                'not_in: 0',
            ],
            'percentage' => [
                'required',
                'string',
                'max: 255',
            ],
            'pass_year' => [
                'required',
                'string',
                'max: 255',
            ],
            'date_format' => [
                'required',
            ],
            'transcript_issue_date' => [
                'required',
                'string',
                'max: 255',
            ],
            'transcript' => [
                'required_without:old_transcript',
                'file',
                'mimetypes:application/pdf',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
            'character' => [
                'required_without:old_character',
                'file',
                'mimetypes:application/pdf',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
            'council' => [
                'nullable',
                'file',
                'mimetypes:application/pdf',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
            'equivalence' => [
                ($this->input('university_id') == 15 && !$this->input('old_equivalence'))
                    ? 'required'
                    : 'nullable',
                'file',
                'mimetypes:application/pdf',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'institution.required' => trans('uservalidation.institution'),
            'university_id.required' => trans('uservalidation.university'),
            'qualification_id.required' => trans('uservalidation.qualification'),
            'division_id.required' => trans('uservalidation.division'),
            'percentage.required' => trans('uservalidation.percentage'),
            'pass_year.required' => trans('uservalidation.pass_year'),
            'date_format.required' => trans('uservalidation.date_format'),
            'transcript_issue_date.required' => trans('uservalidation.transcript_issue_date'),
            'transcript.required_without' => trans('uservalidation.transcript'),
            'character.required_without' => trans('uservalidation.character'),
            'council.required_without' => trans('uservalidation.council'),
            'equivalence.required' => trans('uservalidation.equivalence'),
        ];
    }
}
