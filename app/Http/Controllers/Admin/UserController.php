<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;

use Illuminate\Support\Facades\Hash;
use illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Role;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\Employee;
use App\Models\District;
use App\Models\Province;


class UserController extends Controller
{
    public function index(){
        $users = User::with('role')->where('role_id','=',1)->orderBy('id','desc')->paginate(12);

        return view('admin.user.index',compact('users'));

        // $users=User::with('role')->paginate(12);
        // $jobCategories =JobCategory::with('')
    }

    public function create(){
        return view('admin.user.create');
    }

 
    public function store(UserStoreRequest $request) {
        $data = $request->validated();
        User::create([

                'role_id'=>1,  //manual 
                'email'=>$data['email'],
                'password'=>Hash::make($data['password']),

                ]);
                
        return redirect()->route('user.index')->with('success','Admin details has been created successfuly!');
            
    
    }
    public function show(User $user) {
        return view('admin.user.show',compact('user'));
    }

    public function edit(User $user){
      
        return view('admin.user.edit',compact('user'));

    }
    public function update(User $user,UserUpdateRequest $request){
        $data = $request->validated();  //validated
        
        if($request->input('password')){
            $data['password']=Hash::make($request->input('password'));
        }else{$data['password']=$user->password;}


        $user->update($data);
        return redirect()->route('user.index')->with('success','User details has been update successfuly!');;
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Admin  details has been deleted successfuly!');
    }

    public function delete(User $user){
        return view('admin.user.delete',compact('user'));

    }



    


}
