<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
            
            'email'=>'required|email|unique:users',
            'title'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'address'=>'required',
            'nic'=>'required|regex:/^\d{9}V$/|unique:employees',
            'mobileno'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'gender'=>'required',
            'password'=>'required|confirmed|min:8',
            'province_id'=>'required',
            'district_id'=>'required',
         
          
      
        
        
            



        ];
    }
}
