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
        
        $jobCategories = JobCategory::with('jobs')->orderBy('id','desc')->paginate(12);

        //dd($jobCategories);
        return view ('admin.jobcategory.index',compact('jobCategories'));
       
    }
        //create
        //show
        //edit
        //store
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
/*
    public function update(JobCategory $jobcategory,JobcategoryUpdateRequest $request){
        $data=$request->validated();
        if($request->input('password')){
            $data['password']=Hash::make($request->input('password'));
        }else{$data['password']=$user->password;}
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'User  details has been updated successfuly!');
    }
  */

    public function delete(JobCategory $jobcategory){
        return view('admin.jobcategory.delete',compact('jobcategory'));
    
    }

    public function destroy(JobCategory $jobcategory){
        $jobcategory->delete();
        return redirect()->route('jobcategory.index')->with('success', 'jobcategory  details has been deleted successfuly!');
    }

    
    public function update(JobCategory $jobcategory,JobCategoryUpdateRequest $request){
        $data = $request->validated();  //validated
        $jobcategory->update($data);
        return redirect()->route('jobcategory.index')->with('success','JobCategories details has been update successfuly!');;
    }
    
    
    
}
