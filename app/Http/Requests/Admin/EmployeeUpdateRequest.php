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
                   
        $user=$this->employee->user; 
        $employee=$this->employee;
        return [
          
            'email'=>['required','email',Rule::unique('users')->ignore($user)],
            'title'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'address'=>'required',           
            'nic'=>['required',Rule::unique('employees')->ignore($employee)], 
            'mobileno'=>'required|min:10',
            'gender'=>'required',
            'password'=>'nullable|confirmed|min:8',
            'province_id'=>'required',
            'district_id'=>'required',
         
            
           
        
        ];
    }
}
