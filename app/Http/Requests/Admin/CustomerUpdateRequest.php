<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerUpdateRequest extends FormRequest
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
        $customer=$this->customer;
        $user=$this->customer->user;
        return [
            'email'=>['required','email',Rule::unique('users')->ignore($user)],
            'firstname'=>'required',
            'lastname'=>'required',
            'address'=>'required',
            'nic'=>['required',Rule::unique('customers')->ignore($customer)],
            'mobileno' =>'required|min:10',
            'password'=>'nullable|confirmed|min:8',


        ];
    }

   
}
