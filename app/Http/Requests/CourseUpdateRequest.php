<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_en' => 'required',
            'name_ar' => 'required',
            'teacher_en' => 'required',
            'teacher_ar' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name_en.required' =>__('validation.required'),
            'name_ar.required' => __('validation.required'),
            'teacher_en.required' => __('validation.required'),
            'teacher_ar.required' => __('validation.required'),
        ];
    }
    public function attributes()
{
    return [
        'name_en' =>__('validation.name_en'),
        'name_ar' =>__('validation.name_ar'),
        'teacher_en' =>__('validation.teacher_en'),
        'teacher_ar' =>__('validation.teacher_ar'),
    ];
}
}
