<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherStore extends FormRequest
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
            'teacher_en' => 'required',
            'teacher_ar' => 'required',
            'n_phone' => 'required|max:11',
            'adress' => 'required',
            'lk_face' => 'required',
            'lk_git' => 'required',
            'img' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'teacher_en.required' =>__('validation.required'),
            'teacher_ar.required' => __('validation.required'),
            'n_phone.required' => __('validation.required'),
            'adress.required' => __('validation.required'),
            'lk_face.required' => __('validation.required'),
            'lk_git.required' => __('validation.required'),
            'img.required' => __('validation.required'),
        ];
    }
    public function attributes()
{
    return [
        'n_phone' =>__('validation.name_en'),
        'adress' =>__('validation.name_en'),
        'lk_git' =>__('validation.name_en'),
        'lk_face' =>__('validation.name_ar'),
        'teacher_en' =>__('validation.teacher_en'),
        'teacher_ar' =>__('validation.teacher_ar'),
        'img' =>__('validation.img'),
    ];
}
}
