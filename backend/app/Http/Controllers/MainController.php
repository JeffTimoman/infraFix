<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function index(){
        if (Auth::check()) {
            if(Auth::user()-> roles == 'admin'){
                return redirect()->route('admin.dashboard');
            }else if(Auth::user()->roles == 'manager'){
                return redirect()->route('manager.dashboard');
            }else if(Auth::user()->roles == 'government'){
                return redirect()->route('government.dashboard');
            }else{
                return view('welcome');
            }
        }else{
            return view('welcome');
        }
    }
}
