<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Symfony\Contracts\Service\Attribute\Required;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }
    
    function registration(){
        return view('registration');
    }
    
    function loginpost(request $request){
        $request-> validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }

        return redirect(route('login'))->with("Error", "Login details are not valid");
    }

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique;users',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('registration'))->with("Error", "Registration failed, try again. ");
        }
        return redirect(route('login'))->with("success", "Registration success, login to access the app. ");

    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('login'));

    }
}
