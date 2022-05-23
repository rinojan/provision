<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CharterStoreRequest;
use App\Http\Requests\Admin\CharterUpdateRequest;

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

           return view('admin.order.cindex',compact('charter','chart','orders'));
    }
 
    public function store(Charter $order){
            $q = request()->input('q');
    
            Charter::whereId($order->id)->update([   //charter id  --order  ///alrdy iruka datas so update
            'ratings' => $q,
          ]);
   
          return redirect()->route('order.cindex')->with('success', 'Ratings  has been updated successfully!');
      
         
         
    }






}
