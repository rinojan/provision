<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EmployeeStoreRequest;
use App\Http\Requests\Admin\EmployeeUpdateRequest;

use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Role;
use App\Models\Job;
use App\Models\Employee;
use App\Models\JobCategory;
use App\Models\District;
use App\Models\Province;

class EmployeeController extends Controller
{
        
    public function index(){
        $employees = User::with('role')->where('role_id','=',2)->orderBy('id','desc')->paginate(12); //??  user model la irunthu employee
        return view ('admin.employee.index',compact('employees'));
    }

    public function create() {

        $jobCategories = JobCategory::all();
        $jobs = Job::all();
        $districts = District::all();
        $provinces = Province::all();
   
    return view('admin.employee.create',compact('jobCategories','jobs','districts','provinces'));

    }

    public function dropdown(Request $request){
        $districts =District::where("province_id",$request->province)->get();
        return response()->json($districts); //send json data different types of array

    }

    public function dropdown2(Request $request){
        $jobs =Job::where("category_id",$request->jobCategories)->get();
        return response()->json($jobs); //send json data different types of array

    }

    public function store(EmployeeStoreRequest $request ){
        $data = $request->validated();

        if(Auth::user()->role->name == "Admin") {

        $employee =Employee::create([                                                                                  //id --user pogum //order employee parent 1//user child 2
            
                'title'=>$data['title'],
                'firstname'=>$data['firstname'],
                'lastname'=>$data['lastname'],
                'nic'=>$data['nic'],
                'address'=>$data['address'],
                'mobileno'=>$data['mobileno'],
                'gender'=>$data['gender'],
                'district_id'=>$data['district_id'],
                'province_id'=>$data['province_id'],
            
        ]);
        
        User::create([
        'role_id'=>2,   //manual 
        'email'=>$data['email'],
        'password'=>Hash::make($data['password']),                                                          //??? 2 times
        'employee_id'=>$employee->id,                                                                   //mela irunthu create auto increment
    
        ]);

        return redirect()->route('employee.index')->with('success','Employee details has been created successfuly!');
        } 


    }
    public function show(Employee $employee){
        return view('admin.employee.show',compact('employee'));

    }

    public function edit(Employee $employee){                                                               //Employee model varala

        $employee->load('jobs');
        $jobCategories = JobCategory::all();
        $jobs = Job::all();
        $districts = District::all();
        $provinces = Province::all();
 
        return view('admin.employee.edit',compact('employee','provinces','jobCategories','jobs','districts'));

    }

    public function update(Employee $employee,EmployeeUpdateRequest $request){

        $data = $request->validated();                                                                                                  //validated
        $user =User::where('employee_id','=',$employee->id)->value('id');   //uoutput cureent user id                                                                                       //user frngky employee_id employee model id                                 //id matum bcoz niraya model value id
        if($request->input('password')){
            $data['password']=Hash::make($request->input('password'));
        }else{$data['password']=$employee->user->password;}                                                                                 //user rltn


    Employee::whereId($employee->id)->update([                                                                              //id usr 2 model cnct emplye forin key refernce id /2 create so 2 update
          
            'title'=>$data['title'],
            'firstname'=>$data['firstname'],
            'lastname'=>$data['lastname'],
            'nic'=>$data['nic'],
            'address'=>$data['address'],
            'mobileno'=>$data['mobileno'],
            'gender'=>$data['gender'],
            'district_id'=>$data['district_id'],
            'province_id'=>$data['province_id'],
    
          ]);
          
    User::whereId($user)->update([                                                                              // mela id filter so $user mtm

            'role_id'=>2,                                                                                           //manual 
            'email'=>$data['email'],
            'password'=>$data['password'],                                                                                       //??? 2 times
            'employee_id'=>$employee->id, //
      ]);

        return redirect()->route('employee.index')->with('success','Employee details has been update successfuly!');;
    }

    public function delete(Employee $employee){
        return view('admin.employee.delete',compact('employee'));

    }
    public function destroy(Employee $employee){  
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'Employee  details has been deleted successfuly!');
    }

  
}
