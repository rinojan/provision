<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeUpdateRequest extends FormRequest
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
                   
        $employee=$this->employee->user; //dd panlm //employee rltn  user varible 2 update

        return [
          
            'email'=>['required','email',Rule::unique('users')->ignore($employee)], //users table
            'title'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'address'=>'required',
            'nic'=>'required',
            'mobileno'=>'required',
            'gender'=>'required',
            'password'=>'nullable|confirmed|min:8',
            'province_id'=>'required',
            'district_id'=>'required',
         
            
           
        
        ];
    }
}
