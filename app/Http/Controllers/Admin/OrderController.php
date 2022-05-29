<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CharterStoreRequest;
use App\Http\Requests\Admin\CharterUpdateRequest;

use App\Models\Charter;
use App\Models\Job;
use App\Models\Employee;
use illuminate\Support\Facades\Auth;



class OrderController extends Controller
{
    public function index(Employee $charter,Job $chart){
       
         $orders=Charter::all();// paginate
         return view('admin.order.index',compact('orders','charter','chart'));
    }

    public function cindex(Employee $charter,Job $chart){
      $customer_id=Auth::user()->customer->id;
      $orders =Charter::where('customer_id',$customer_id)->orderBy('id','desc')->paginate(12);
      return view('admin.order.cindex',compact('charter','chart','orders'));
    }

    public function eindex(Employee $charter,Job $chart){
      $employee_id=Auth::user()->employee->id;
      $orders=Charter::where('employee_id',$employee_id)->orderBy('id','desc')->paginate(12);
      return view('admin.order.eindex',compact('charter','chart','orders'));
    }   
 
 
    public function store(Charter $order){
            $q = request()->input('q');
    
            Charter::whereId($order->id)->update([   //charter id  --order  ///alrdy iruka datas so update
            'ratings' => $q,
          ]);
   
          return redirect()->route('order.cindex')->with('success', 'Ratings  has been updated successfully!');
   
         
         
    }

    public function storeStatus(Charter $order){
        $q = request()->input('q');
    
        Charter::whereId($order->id)->update([   //charter id  --order  ///alrdy iruka datas so update
        'status' =>$q,
      ]);

      return redirect()->route('order.index')->with('success', 'Order Status  has been updated successfully!');
  
    }

}
