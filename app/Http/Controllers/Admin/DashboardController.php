<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // why use?
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

use App\Models\Job;
use App\Models\User;


class DashboardController extends Controller
{
       public function index(){
        switch(Auth::user()->role->name){
            case 'Admin':
            return view('admindashboard');
                  break;
            case 'Employee':
            return view('employeedashboard');
                  break;
                  
            case 'Customer':
                  
            $jobs =Job::with('employees')->get();
            return view('customerdashboard',compact('jobs'));
                  break;
           
        }         
    }
}
