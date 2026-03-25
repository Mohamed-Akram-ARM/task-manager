<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\DashboardController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
     // show register page
   

    public function showRegister()
    {
        return view('auth.register');
    }

    // register user
    public function register(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'department'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);

       User::create([
      'name'=>$request->name,
      'department'=>$request->department,
      'email'=>$request->email,
       'password'=>Hash::make($request->password),
       'role'=>'user'
         ]);

        return view('auth.login');
    }

    // show login page
    public function showLogin()
    {
        return view('auth.login');
    }

    // login user
   public function login(Request $request)
{
    if(Auth::attempt($request->only('email','password')))
    {
        if(Auth::user()->role == 'admin'){
            return redirect()->route('adminDashboard');
        }else{
            return redirect()->route('dashboard');
        }
    }

    return back()->with('error','Invalid login details');
}

    // logout
    public function logout()
    {
        Auth::logout();
            return redirect()->route('login');

        //return redirect('/login');
    }
}
