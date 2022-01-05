<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EmployeeJobUpdateRequest;
use App\Http\Requests\Admin\EmployeeJobStoreRequest;

use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

use App\Models\Employee;
use App\Models\JobCategory;
use App\Models\Job;
use App\Models\District;
use App\Models\Province;

class EmployeeJobController extends Controller
{
    public function index(Employee $employee){
        return view ('admin.employee_job.index', compact('employee'));
    }

    public function create(Employee $employee) {

        $jobCategories = JobCategory::all();
        $jobs = Job::all();
        $districts = District::all();
        $provinces = Province::all();
   
    return view('admin.employee_job.create',compact('jobCategories','jobs','employee'));

    }
    public function dropdown2(Request $request){
        $jobs =Job::where("category_id",$request->jobCategories)->get();
        return response()->json($jobs); //send json data different types of array

    }

    public function store(EmployeeJobStoreRequest $request,Employee $employee ){
        $data = $request->validated();
    
        $employee->jobs()->attach([$employee->id=>['salary'=>$data['salary'],'job_id'=>$data['job_id'],'type'=>$data['type'],'working_duration'=>$data['working_duration'] , 'job_category_id'=>$data['job_category_id'] ]]);

        return redirect()->route('employee.job.index')->with('success','Employee Job details has been created successfuly!');
        } 

    public function edit(Employee $employee){
        $jobCategories = JobCategory::all();
        $jobs = Job::all();
        return view ('admin.employee_job.edit', compact('employee','jobs','jobCategories'));
    }
    
    public function show(Employee $employee){
        return view ('admin.employee_job.show', compact('employee'));
    }

    public function update(Employee $employee,EmployeeJobUpdateRequest $request){
        $data = $request->validated();  //validated
        $employee->update($data);
        return redirect()->route('employee.job.index')->with('success','Employee Job details has been update successfuly!');;
    }

    
    public function delete(Employee $employee){
        return view('admin.employee_job.delete',compact('employee'));

    }
    public function destroy(Employee $employee){  // User model?
        $employee->delete();
        return redirect()->route('employee.job.index')->with('success', 'Employee-job  details has been deleted successfuly!');
    }

}
