<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CharterStoreRequest;

use App\Models\Charter;
use App\Models\Job;
use App\Models\Employee;


class OrderController extends Controller
{
    public function index(Employee $charter,Job $chart){
        $orders =Charter::all();
            return view('admin.order.index',compact('orders','charter','chart'));
    }

    public function cindex(Employee $charter,Job $chart){
        $orders =Charter::all();
           return view('admin.order.cindex',compact('orders','charter','chart'));
    }
    public function rating(Employee $charter,Job $chart){
        $orders =Charter::all();
           return view('admin.order.rating',compact('orders','charter','chart'));
    }

    public function store(CharterStoreRequest $request,Employee $charter,Job $chart){
        $data = $request->validated();
        $charter=Charter::create([
            'ratings' => $data['ratings'],
          
         ]);

          return redirect()->route('order.cindex')->with('success', 'Ratings  has been updated successfully!');
    }
}
