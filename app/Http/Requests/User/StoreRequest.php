<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'patronymic' => 'required|string',
            'age' => 'required|integer',
            'gender' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'необходимо заполнить поле',
            'surname.required' => 'необходимо заполнить поле',
            'patronymic.required' => 'необходимо заполнить поле',
            'age.required' => 'необходимо заполнить поле',
            'age.integer' => 'только цифры',
            'age.min' => 'минимум 2 цифры',
            'age.max' => 'максимум 3 цифры',
            'gender.required' => 'необходимо заполнить поле',
            'address.required' => 'необходимо заполнить поле',
            'email.required' => 'необходимо заполнить поле',
            'email.email' => 'не верный e-mail',
            'email.unique' => 'проврьте актуальность e-mail',
            'password.required' => 'необходимо заполнить поле',
            'password.confirmed' => 'пароли не совпадают',
        ];
    }

}
