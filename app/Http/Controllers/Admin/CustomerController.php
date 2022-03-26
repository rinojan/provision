<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CustomerStoreRequest;
use App\Http\Requests\Admin\CustomerUpdateRequest;
use illuminate\Support\Facades\Hash;

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

    public function update(Customer $customer,CustomerUpdateRequest $request){
        $data = $request->validated();  //validated
        $customer->update($data);
        return redirect()->route('customer.index')->with('success','customer details has been update successfuly!');;
    }
    
    public function destroy(Customer $customer){
        $customer->delete();
        return redirect()->route('customer.index')->with('success', 'Customer  details has been deleted successfuly!');
    }

    public function delete(Customer $customer) {
        return view('admin.customer.delete',compact('customer'));
    }
    
}
