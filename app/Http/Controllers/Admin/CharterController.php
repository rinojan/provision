<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Job;

class CharterController extends Controller
{
    public function index(){
       
        return view('admin.charter.index');
    }

    public function create(){
        return view('admin.charter.create');
    }

    public function show(){
        return view('admin.charter.show');
    }
}
