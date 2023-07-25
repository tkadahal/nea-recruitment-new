<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUploadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'photo' => [
                'required_without:old_photo',
                'file',
                'mimetypes:image/jpeg,image/jpg,image/png',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
            'sign' => [
                'required_without:old_sign',
                'file',
                'mimetypes:image/jpeg,image/jpg,image/png',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
            'citizenship_front' => [
                'required_without:old_citizenship_front',
                'file',
                'mimetypes:image/jpeg,image/jpg,image/png',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
            'citizenship_back' => [
                'required_without:old_citizenship_back',
                'file',
                'mimetypes:image/jpeg,image/jpg,image/png',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
            'samabeshi' => [
                'nullable',
                'file',
                'mimetypes:image/jpeg,image/jpg,image/png,application/pdf',
                'max:5242880', // 5 MB in bytes (5 * 1024 * 1024)
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'photo.required_without' => trans('uservalidation.photo'),
            'photo.mimetypes' => trans('uservalidation.photo_mime'),
            'photo.max' => trans('uservalidation.photo_max'),
            'sign.required_without' => trans('uservalidation.sign'),
            'sign.mimetypes' => trans('uservalidation.sign_mime'),
            'sign.max' => trans('uservalidation.sign_max'),
            'citizenship_front.required_without' => trans('uservalidation.citizenship_front'),
            'citizenship_front.mimetypes' => trans('uservalidation.citizenship_front_mime'),
            'citizenship_front.max' => trans('uservalidation.citizenship_front_max'),
            'citizenship_back.required_without' => trans('uservalidation.citizenship_back'),
            'citizenship_back.mimetypes' => trans('uservalidation.citizenship_back_mime'),
            'citizenship_back.max' => trans('uservalidation.citizenship_back_max'),
            'samabeshi.mimetypes' => trans('uservalidation.samabeshi_mime'),
            'samabeshi.max' => trans('uservalidation.samabeshi_max'),
        ];
    }
}
