<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomerStoreRequest;
use App\Http\Requests\Admin\CustomerUpdateRequest;
use illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = User::with('role')->where('role_id','=',3)->orderBy('id','desc')->paginate(12);//asc
        return view ('admin.customer.index',compact('customers'));
    }

    public function store(CustomerStoreRequest $request){
        $data = $request->validated();

        $customer =Customer::create([
            'firstname'=>$data['firstname'],
            'lastname' =>$data['lastname'],
            'address'  =>$data['address'],
            'nic'      =>$data['nic'],
            'mobileno' =>$data['mobileno'],
        ]);
        return redirect()->route('cutomer.index')->with('success','customer details has been created successfuly!');
    } 

    public function show(Customer $customer){
        return view('admin.customer.show',compact('customer'));
    }
    
 
    public function edit(Customer $customer) {
        return view('admin.customer.edit',compact('customer'));
    }

    public function editc(Customer $customer) {
        return view('admin.customer.editc',compact('customer'));
    }


    public function update(Customer $customer,CustomerUpdateRequest $request){
        $data = $request->validated();                                                                                                  //validated
        $user =User::where('customer_id','=',$customer->id)->value('id');   //uoutput cureent user id                                                                                       //user frngky employee_id employee model id                                 //id matum bcoz niraya model value id
        if($request->input('password')){
            $data['password']=Hash::make($request->input('password'));
        }else{$data['password']=$customer->user->password;}                                                                                 //user rltn


    Customer::whereId($customer->id)->update([                                                                              //id usr 2 model cnct emplye forin key refernce id /2 create so 2 update
          
            
            'firstname'=>$data['firstname'],
            'lastname'=>$data['lastname'],
            'nic'=>$data['nic'],
            'address'=>$data['address'],
            'mobileno'=>$data['mobileno'],
            
            
    
          ]);
          
    User::whereId($user)->update([                                                                              // mela id filter so $user mtm

            'role_id'=>3,                                                                                           //manual 
            'email'=>$data['email'],
            'password'=>$data['password'],                                                                                       //??? 2 times
            'customer_id'=>$customer->id, //
      ]);

      if(Auth::user()->role->name=="Admin"){

        return redirect()->route('customer.index')->with('success','Customer details has been update successfuly!');;
    }else{
        return redirect()->route('dashboard')->with('success','Profile details has been update successfuly!');;

    }
}
    
    public function destroy(Customer $customer){
        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Customer  details has been deleted successfuly!');
    }

    public function delete(Customer $customer) {
        return view('admin.customer.delete',compact('customer'));
    }
    
}
