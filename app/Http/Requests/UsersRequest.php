<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
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
            'email' => 'required|unique:users',
            'password' => 'required|unique:users'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'You must fill up this field',
            'email.unique' => 'This email is not unique',
            'password.unique' => 'This password is taken to others',
            'password.required' => 'You must fill up this field'
        ];
    }
}
