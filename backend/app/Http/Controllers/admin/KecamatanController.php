<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index(){
        $kecamatans = Kecamatan::paginate(5);
        return view('admin.kecamatan.index', ['data' => $kecamatans]);
    }
}
