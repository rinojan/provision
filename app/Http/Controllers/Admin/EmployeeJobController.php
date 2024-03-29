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
        try{
        $data = $request->validated();
        $employee->jobs()->attach([$employee->id=>['salary'=>$data['salary'],'job_id'=>$data['job_id'],'type'=>$data['type'],'working_duration'=>$data['working_duration'] , 'job_category_id'=>$data['job_category_id'] ]]);

        return redirect()->route('employee.job.index',$employee->id)->with('success','Employee Job details has been created successfuly!');
        } catch(\Illuminate\Database\QueryException $e){

            return redirect()->back()->with('error','You cannot create same job details again');
        }
    } 

    public function show(Employee $employee,Job $job){
        
        return view ('admin.employee_job.show',compact('employee','job'));

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
    
    public function update(Employee $employee,Job $job,$type,EmployeeJobUpdateRequest $request){
        try{
        $data = $request->validated();                                                                                                                                                                                                                                // $request mela irunthu varuthu validated
        $employee->jobs()->wherePivot('type',$type)->syncWithoutDetaching([$employee->id=>['salary'=>$data['salary'],'job_id'=>$data['job_id'],'type'=>$data['type'],'working_duration'=>$data['working_duration'] , 'job_category_id'=>$data['job_category_id'] ]]);
        return redirect()->route('employee.job.index',$employee->id)->with('success','Employee Job details has been update successfuly!');;
        }catch(\Illuminate\Database\QueryException $e){
              
            return redirect()->back()->with('error','You cannot updates these fields');
        }
    }

    public function delete(Employee $employee,Job $job, $type){
        return view('admin.employee_job.delete',compact('employee','job','type'));

    }
    public function destroy(Employee $employee,Job $job, $type){  
        $employee->jobs()->wherePivot('type',$type)->detach($job->id);

        return redirect()->route('employee.job.index',$employee->id)->with('success', 'Employee_job  details has been deleted successfuly!');
    }

}
