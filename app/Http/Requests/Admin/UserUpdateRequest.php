<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UserUpdateRequest extends FormRequest
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
        $user=$this->user; //this->user controller la 2nd
        return [

            'email'=>['required','email',Rule::unique('users')->ignore($user)], //here inside  email is a type
            'password'=>'nullable|confirmed|string|min:8',
            
        ];
    }
}
