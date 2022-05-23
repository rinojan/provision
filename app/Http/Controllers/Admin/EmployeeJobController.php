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
        return view ('admin.employee_job.index',compact('employee'));
    }

    public function create(Employee $employee) {
        $jobCategories = JobCategory::all();
        $jobs = Job::all();

    return view('admin.employee_job.create',compact('jobCategories','jobs','employee'));

    }
    public function dropdown2(Request $request){
        $jobs =Job::where("category_id",$request->jobCategories)->get();
        return response()->json($jobs); //send json data different types of array

    }

    public function store(Employee $employee, EmployeeJobStoreRequest $request){
        $data = $request->validated();
        $employee->jobs()->attach([$employee->id=>['salary'=>$data['salary'],'job_id'=>$data['job_id'],'type'=>$data['type'],'working_duration'=>$data['working_duration'] , 'job_category_id'=>$data['job_category_id'] ]]);

        return redirect()->route('employee.job.index',$employee->id)->with('success','Employee Job details has been created successfuly!');
        } 

    public function show(Employee $employee){
            return view ('admin.employee_job.show',compact('employee'));
        }

    public function edith(Employee $employee,Job $job){
        $type ='hours';
        $jobCategories = JobCategory::all();
        $jobs = Job::all();
        $employee->load('jobs'); //relation load
        return view ('admin.employee_job.edit', compact('employee','jobs','jobCategories','job','type'));
    }
    
    public function editd(Employee $employee,Job $job){
        $type ='day';
        $jobCategories = JobCategory::all();
        $jobs = Job::all();
        $employee->load('jobs'); //relation a load
            return view ('admin.employee_job.edit', compact('employee','jobs','jobCategories','job','type'));
    }
    
    public function update(Employee $employee,EmployeeJobUpdateRequest $request){
        $data = $request->validated();  
                                                                                                                                                                                                                                    // $request mela irunthu varuthu validated
        $employee->jobs()->sync([$employee->id=>['salary'=>$data['salary'],'job_id'=>$data['job_id'],'type'=>$data['type'],'working_duration'=>$data['working_duration'] , 'job_category_id'=>$data['job_category_id'] ]]);
        return redirect()->route('employee.job.index',$employee->id)->with('success','Employee Job details has been update successfuly!');;
    }

    public function delete(Employee $employee,Job $job, $type){
        return view('admin.employee_job.delete',compact('employee','job','type'));

    }
    public function destroy(Employee $employee,Job $job, $type){
  
        $employee->jobs()->wherePivot('type',$type)->detach($job->id);

        return redirect()->route('employee.job.index',$employee->id)->with('success', 'Employee_job  details has been deleted successfuly!');
    }

}
