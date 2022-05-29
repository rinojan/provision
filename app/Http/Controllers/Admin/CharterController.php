<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CharterStoreRequest;

use App\Models\Job;
use App\Models\Employee;
use App\Models\Charter;
use illuminate\Support\Facades\Auth;


class CharterController extends Controller
{
    public function index(Employee $charter,Job $chart){
        return view('admin.charter.index',compact('charter','chart'));
    }

    public function create(Employee $charter,Job $chart){
        $charter->load('jobs');
        return view('admin.charter.create',compact('charter','chart'));
    }

    public function store(CharterStoreRequest $request,Employee $charter,Job $chart){
              $data = $request->validated();
        
          $charter =Charter::create([
      
            'jobdate'=>$data['jobdate'],
            'description'=>$data['description'],
            'employee_id'=>$charter->id,
            'customer_id'=>Auth::user()->customer->id,
            'job_id'=>$chart->id, //jbid
           
        ]);

        return redirect()->route('dashboard',[$charter->id,$chart->id])->with('success','charter details has been created successfuly! See the Order Tab');
    } 

    public function show(Employee $charter,Job $chart){
        $charter->load('jobs');
        return view('admin.charter.show',compact('charter'));
    }
    
    public function edit(Employee $charter,Job $chart){
        return view('admin.charter.edit',compact('charter','chart'));

    }
    public function update(){
        return redirect()->route(charter.index)->with('charter index update succuessfully');
    }
}


