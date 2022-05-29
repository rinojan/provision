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
                  $employee_id=Auth::user()->employee->id;
                  $orders=Charter::where('employee_id',$employee_id)->get();
            return view('employeedashboard',compact('orders'));
                  break;
                  
            case 'Customer':
             

          

            $q = request()->input('q');

            if($q){
                $jobs =Job::where('title','like',"%{$q}%")->with('employees')->orderBy('id', 'desc')->paginate(12);
            }else{
                  $jobs =Job::with('employees')->orderBy('id', 'desc')->paginate(12);   
            }
            
            return view('customerdashboard',compact('jobs'));
            break;

            }      
           
        }         
    
}
