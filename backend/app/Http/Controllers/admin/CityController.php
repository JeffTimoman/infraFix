<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = Kota::paginate(5);
        return view('admin.city.index', ['data' => $cities]);
    }

    public function create(){
        $provinces = Provinsi::all();
        return view('admin.city.create', ['data' => $provinces]);
    }
}
