<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:15|max:100'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным для заполнения!',
            'email.required' => 'Поле почты является обязательным для заполнения!',
            'subject.required' => 'Поле темы является обязательным для заполнения!',
            'message.required' => 'Поле сообщения является обязательным для заполнения!',
            'email.email' => 'Не верно введена почта!',
            'subject.min' => 'Поле темы должно содержать минимум 5 символов!',
            'subject.max' => 'Поле темы должно содержать максимум 100 символов!',
            'message.min' => 'Поле сообщения должно содержать минимум 15 символов!',
            'message.max' => 'Поле сообщения должно содержать максимум 100 символов!',
        ];
    }
}
