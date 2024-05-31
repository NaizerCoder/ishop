<?php

namespace App\Http\Requests\Product;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'description' => '',
            'price' => 'required|integer',
            'count' => 'required|string',
            'tags' => '',
            'colors' => '',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'необходимо заполнить поле',
            'content.required' => 'необходимо заполнить поле',
            'price.required' => 'необходимо заполнить поле',
            'count.required' => 'необходимо заполнить поле',

        ];
    }

}
