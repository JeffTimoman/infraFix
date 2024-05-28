<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function showLoginForm(){
        return view('auth.login');
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required'
        ]);
    }

}
