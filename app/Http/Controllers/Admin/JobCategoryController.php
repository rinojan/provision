<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobCategoryStoreRequest;
use App\Http\Requests\Admin\JobCategoryUpdateRequest;

use App\Models\JobCategory;
use App\Models\Job;



class JobCategoryController extends Controller
{
    public function index() {
        $jobCategories = JobCategory::with('jobs')->orderBy('id','desc')->paginate(12); //jobs rltn
        //dd($jobCategories);
        return view ('admin.jobcategory.index',compact('jobCategories'));
       
    }
    public function create(){
        return view('admin.jobcategory.create');
    }

    public function store(jobCategoryStoreRequest $request) {
        $data = $request->validated();

        JobCategory::create([
                'name'=>$data['name'],
            ]);
        return redirect()->route('jobcategory.index')->with('success','Jobcategory details has been created successfuly!');
    } 

    public function show(JobCategory $jobcategory){
        return view('admin.jobcategory.show',compact('jobcategory'));
        
    }

    public function edit(JobCategory $jobcategory){
        return view('admin.jobcategory.edit',compact('jobcategory'));

    }

    public function update(JobCategory $jobcategory,JobCategoryUpdateRequest $request){
        $data = $request->validated();  //validated
        $jobcategory->update($data); //mela vaartga eduthu updte $jobctry
        return redirect()->route('jobcategory.index')->with('success','Job_categories details has been update successfuly!');;
    }

    public function delete(JobCategory $jobcategory){
        return view('admin.jobcategory.delete',compact('jobcategory'));
    
    }

    public function destroy(JobCategory $jobcategory){
        $jobcategory->delete();
        return redirect()->route('jobcategory.index')->with('success', 'jobcategory  details has been deleted successfuly!');
    }
    
}
