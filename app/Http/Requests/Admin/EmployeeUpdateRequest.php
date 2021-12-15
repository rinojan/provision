<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

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
                   
        $employee=$this->employee;
        return [
          
            'email'=>'required|email|unique:users',
            'title'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'address'=>'required',
            'nic'=>'required',
            'mobileno'=>'required',
            'gender'=>'required',
            'password'=>'required|confirmed|min:8',
            'working_duration'=>'required',
            'type'=>'required',
            'salary'=>'required',
      
            'province_id'=>'required',
            'district_id'=>'required',
         
            'job_category_id'=>'required',
            'job_id'=>'required',
            
        
        ];
    }
}
