<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Job;
use App\Models\Employee;

class CharterController extends Controller
{
    public function index(Employee $charter){
      
        return view('admin.charter.index',compact('charter'));
    }

    public function create(Employee $charter){
        return view('admin.charter.create',compact('charter'));
    }

    public function show(Employee $charter){
        return view('admin.charter.show',compact('charter'));
    }
    public function edit(Employee $charter){
        return view('admin.charter.edit',compact('charter'));
    }
    public function update(){
        return redirect()->route(charter.index)->with('charter index update succuessfully');
    }
}
