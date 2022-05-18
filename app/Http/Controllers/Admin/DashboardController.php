<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // why use?
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;
use App\Models\Job;



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

            $q = request()->input('q');
            if($q){
                  $jobs =Job::where('firstname','like',"%{$q}%")->orwhere('lastname','like',"%{$q}%")->orwhere('id','like',"%{$q}")->with('role')->orderBy('id', 'desc')->paginate(12);
            }else{
                   $users=User::with('role','department')->orderBy('id','desc')->paginate('12');
            }
           
            return view('customerdashboard',compact('jobs'));
                  break;
           
        }         
    }
}
