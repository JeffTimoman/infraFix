<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(){
        return view('profile.profile');
    }

    public function edit(){
        return view('profile.edit');
    }

    public function password(){
        return view('profile.password');
    }
}
