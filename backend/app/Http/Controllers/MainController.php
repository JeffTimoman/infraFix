<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function index(){
        if(Auth::user()-> role == 'admin'){
            return redirect()->route('admin.dashboard');
        }else if(Auth::user()->role == 'manager'){
            return redirect()->route('manager.dashboard');
        }else if(Auth::user()->role == 'government'){
            return redirect()->route('government.dashboard');
        }else {
            return redirect('/');
        }
    }
}
