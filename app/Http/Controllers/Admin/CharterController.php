<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Job;
use App\Models\Employee;

class CharterController extends Controller
{
    public function index(Employee $charter,Job $chart){
        return view('admin.charter.index',compact('charter','chart'));
    }

    public function create(Employee $charter,Job $chart){
        $charter->load('jobs');
        return view('admin.charter.create',compact('charter','chart'));
    }

    public function store(CharterStoreRequest $request){
            $data= $request->validated();

            
        $charter =Charter::create([
            'firstname'=>$data['firstname'],
            'lastname' =>$data['lastname'],
            'address'  =>$data['address'],
            'nic'      =>$data['nic'],
            'mobileno' =>$data['mobileno'],
        ]);



            
    }

    public function show(Employee $charter,Job $chart){
        return view('admin.charter.show',compact('charter'));
    }
    public function edit(Employee $charter,Job $chart){

        return view('admin.charter.edit',compact('charter','chart'));



    }
    public function update(){
        return redirect()->route(charter.index)->with('charter index update succuessfully');
    }
}
