<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function dashboard()
    {
        $laporan_count = Report::count();
        $reports = Report::all();
        return view('manager.dashboard', ['laporan_count' => $laporan_count, 'reports' => $reports]);
    }

    public function laporan()
    {
    }

    public function hot_topic()
    {
    }
}
