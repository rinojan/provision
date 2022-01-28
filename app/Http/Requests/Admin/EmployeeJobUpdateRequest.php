<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeJobUpdateRequest extends FormRequest
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
           
            'job_category_id'=>'required',
            'job_id'=>'required',
            'working_duration'=>'required',
            'type'=>'required',
            'salary'=>'required',
      
        ];
    }
}
