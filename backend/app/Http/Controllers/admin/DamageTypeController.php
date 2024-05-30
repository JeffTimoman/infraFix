<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DamageType;
use Illuminate\Http\Request;

class DamageTypeController extends Controller
{
    public function index(){
        $damage_types = DamageType::paginate(5);
        return view('admin.damage_type.index', ['data' => $damage_types]);
    }
}
