<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|max:255|min:20'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле :attribute обязательно для заполнения.',
            'name.max' => 'Поле :attribute должно быть  не длинее :max.',
        ];
    }
}
