<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobStoreRequest;
use App\Http\Requests\Admin\JobUpdateRequest;

use App\Models\Job;
use App\Models\JobCategory;

class JobController extends Controller
{
    public function index(){
        $jobs = Job::with('jobcategory')->orderBy('id','desc')->paginate(12);
        return view('admin.job.index',compact('jobs'));
    
    }

    public function create() {

        $jobCategories = JobCategory::all()->pluck('name','id')->toArray();
        $jobCategories [''] ='---Choose the Job Category----';
       // dd($jobCategories);
        return view('admin.job.create',compact('jobCategories'));
    }


    public function store(jobStoreRequest $request) {
        $data = $request->validated();
        Job::create([

                'title'=>$data['title'],
                'category_id'=>$data['category_id'],

                ]);
                
        return redirect()->route('job.index')->with('success','Job details has been created successfuly!');    
    
    }

    public function show(Job $job) {
        return view('admin.job.show',compact('job'));
    }
 
    public function edit(Job $job) {

        $jobCategories = JobCategory::all()->pluck('name','id')->toArray();

        return view('admin.job.edit',compact('job','jobCategories'));
    }

    public function update(Job $job,JobUpdateRequest $request){
        $data = $request->validated();  //validated
        $job->update($data);
        return redirect()->route('job.index')->with('success','Job details has been update successfuly!');;
    }
    
    public function destroy(Job $job){
        
        $job->delete();
        return redirect()->route('job.index')->with('success', 'job details has been deleted successfuly!');
    }

    
    public function delete(Job $job) {
        return view('admin.job.delete',compact('job'));
    }
    
 
}
