<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index(){
        $provinces = Provinsi::paginate(5);
        return view('admin.province.index', ['data' => $provinces]);
    }
}
