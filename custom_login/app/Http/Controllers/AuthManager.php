<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        
        $credentials = $request->only('email','password')
    }
}
