<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Customer;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'nic' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mobileno' =>['required','regex:/^([0-9\s\-\+\(\)]*)$/','max:10'], /// meaning of regex
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $customer = Customer::create([
      
            'firstname' => $request->firstname,
            'lastname' =>$request->lastname,
            'address'  =>$request->address,
            'nic' =>$request->nic,
            'mobileno' =>$request->mobileno,
             // not in customer table    

             
        ]);

        $user = User::create([
            'role_id'=>3,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'customer_id' =>$customer->id,

        
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
