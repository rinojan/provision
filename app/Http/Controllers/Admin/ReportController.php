<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Report;

class ReportController extends Controller
{
    public function index(){

        return view('admin.report.index');
    }
}
