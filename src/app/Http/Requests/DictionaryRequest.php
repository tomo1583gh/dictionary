<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DictionaryRequest extends FormRequest
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
            'keyword' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ];
    }

    public function attributes()
    {
        return [
            'keyword' => 'キーワード',
            'description' => '説明',
        ];
    }

    public function messages()
    {
        return [
            'keyword.request' => 'キーワードを入力して下さい',
            'keyword.max' => 'キーワードは255文字以内で入力して下さい',
            'description.required' => '説明を入力して下さい',
            'description.max' => '説明は1000文字以内で入力して下さい',
        ];
    }
}
