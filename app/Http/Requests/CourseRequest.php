<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
            'teacher' => 'required',
            'img' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name_en.required' =>__('validation.required'),
            'name_ar.required' => __('validation.required'),
            'teacher.required' => __('validation.required'),
            'img.required' => __('validation.required'),
        ];
    }
    public function attributes()
{
    return [
        'name_en' =>__('validation.name_en'),
        'name_ar' =>__('validation.name_ar'),
        'teacher' =>__('validation.teacher_ar'),
        'img' =>__('validation.img'),
    ];
}
}
