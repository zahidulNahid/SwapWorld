<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'fullName' => 'required',
            'email' => 'required|unique:profile',
            'phone' => 'required|unique:profile',
            'gender' => 'required',
            'profilePicture' => 'required',
            'password' => 'required|min:6|max:20|unique:profile',
            'confirmPass' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'fullName.required' => 'You must fill up Name',
            'email.required' => 'You must fill up email address',
            'email.unique' => 'This email is not unique',
            'phone.required' => 'You must fill up phone number',
            'phone.unique' => 'This phone is not unique',
            'gender.required' => 'Please select any gender',
            'profilePicture.required' => 'You must upload a profile picture',
            
            'password.required' => 'You must fill up password box with a unique password and between 6 to 20 characters',
            'password.unique' => 'This password is not unique',
            'lotteryNumber.unique' => 'This ticket number is not unique try another ticket',
            'confirmPass.required' => 'You must confirm password not match with password'
        ];
    }
}