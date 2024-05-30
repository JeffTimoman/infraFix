<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index(){
        $kelurahans = Kelurahan::paginate(5);
        return view('admin.kelurahan.index', ['data' => $kelurahans]);
    }
}
