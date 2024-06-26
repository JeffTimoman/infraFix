<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $reports = Report::paginate(5);
        return view('admin.report.index', ['data' => $reports]);
    }
}
