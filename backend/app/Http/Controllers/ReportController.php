<?php

namespace App\Http\Controllers;

use App\Models\DamageType;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index(){
        $damage_types = DamageType::orderBy('name', 'asc')->get();
        $provinsis = Provinsi::orderBy('name', 'asc')->get();
        $kotas = Kota::orderBy('name', 'asc')->get();
        $kecamatans = Kecamatan::orderBy('name', 'asc')->get();
        $kelurahans = Kelurahan::orderBy('name', 'asc')->get();
        $data = [
            'damage_types' => $damage_types,
            'provinsis' => $provinsis,
            'kotas' => $kotas,
            'kecamatans' => $kecamatans,
            'kelurahans' => $kelurahans
        ];
        return view('report.index', ['data' => $data]);
    }
    public function indexDep(){
        $report_code = 'anjay_ini_jalan';
        $access_key = 'anjay_ini_password';
        $hashed_report_code = encrypt($report_code, $access_key);
        $data = [
            'report_code' => $report_code,
            'access_key' => $access_key,
            'hashed_report_code' => $hashed_report_code
        ];
        dd($data);
    }
    public function showDep($report_code, $access_key){
        // reverse hash the report_code using the access_key
        $hashed_report_code = "eyJpdiI6IjR4VlZLSnAyYWZ3V3o3cGN2WnJHUWc9PSIsInZhbHVlIjoiK0oycE1TU05Zam5kc0ZtQ3VUMVR6VU1FNDkvQWYwN0VQU1JXRldtbmhEUT0iLCJtYWMiOiJmMDg3YjJmMzJiOWU0OTVmNjI3MDAxOGUwZjk4MGVjMDJlODQ3ZTQzMGZhMDY4MGQ3YjEyNTc5NWVmNjYxZGM3IiwidGFnIjoiIn0=";
        $decrypted_report_code = decrypt($hashed_report_code, $access_key);
        if ($decrypted_report_code == $report_code){
            return response()->json([
                'message' => 'success',
                'data' => [
                    'report_code' => $report_code,
                    'access_key' => $access_key,
                    'hashed_report_code' => $hashed_report_code
                ]
            ]);
        } else {
            return response()->json([
                'message' => 'failed',
                'data' => [
                    'report_code' => $report_code,
                    'access_key' => $access_key,
                    'hashed_report_code' => $hashed_report_code
                ]
            ]);
        }
    }
}
