<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

use App\Models\Job;
use App\Models\User;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Charter;


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
                $users =Employee::where('firstname','like',"%{$q}%")->orwhere('lastname','like',"%{$q}%")->orwhere('id','like',"%{$q}")->with('jobs')->orderBy('id', 'desc')->paginate(12);
            }else{
                  $users=Employee::with('jobs','user')->orderBy('id','desc')->paginate('12');   
            }

            return view('customerdashboard',compact('jobs','users'));
            break;

            }      
           
        }         
    
}
