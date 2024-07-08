<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $data = [
            'report_total' => Report::count(),
            'user_total' => User::count(),
            'reports' => Report::take(10)->get(),
            'unconfirmed' => Report::where('case_id', null)->count(),
        ];
        return view('admin.dashboard', ['data' => $data]);
    }
}
