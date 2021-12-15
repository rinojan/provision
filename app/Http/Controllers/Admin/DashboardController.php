<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller; // why use?
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

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
            return view('customerdashboard');
                  break;
           
        }         
    }
}
