<?php

namespace App\Http\Controllers;

use App\Models\DamageType;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Report;
use App\Models\ReportImage;
use App\Models\User;
use App\Services\CustomEncryptor;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index()
    {
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

    public function store(Request $request)
    {
        $request->validate([
            'damage' => 'required|exists:App\Models\DamageType,id',
            'description' => 'required',
            'kelurahan' => 'required|exists:App\Models\Kelurahan,id',
            'address' => 'required',
            'email' => 'required|email',
            'anonymous' => 'required|boolean',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate each image
        ]);

        $damage = DamageType::find($request->damage);
        $kelurahan = Kelurahan::find($request->kelurahan);
        $report_code = uniqid() . bin2hex(random_bytes(20));
        $random_access_key = bin2hex(random_bytes(4));

        // Create an instance of CustomEncryptor with the random access key
        $encryptor = new \App\Services\CustomEncryptor($random_access_key);

        // Encrypt the report code using the CustomEncryptor
        $hashed_report_code = $encryptor->encrypt($report_code);

        $data = [
            'damage_type_id' => $damage->id,
            'description' => $request->description,
            'hashed_report_code' => $hashed_report_code,
            'kelurahan_id' => $kelurahan->id,
            'title' => 'title',
            'address' => $request->address,
            'email' => $request->email,
            'anonymous' => $request->anonymous,
            'report_code' => $report_code,
        ];

        if ($request->anonymous) {
            $data['user_id'] = null;
            $data['email'] = '';
        } else {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                $data['user_id'] = $user->id;
            }
        }

        $report = Report::create($data);

        $images = $request->file('images');
        $images_name = [];
        foreach ($images as $image) {
            $uniqueName = date('YmdHis') . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload/reportimage'), $uniqueName);
            $images_name[] = $uniqueName;
        }

        foreach ($images_name as $image_name) {
            ReportImage::create([
                'report_id' => $report->id,
                'name' => $image_name,
                'case_id' => null
            ]);
        }

        $res = [
            'report_code' => $report_code,
            'access_key' => $random_access_key,
        ];

        return view('report.success', ['data' => $res]);
    }


    public function show()
    {
        return view('report.view');
    }

    public function showPost(Request $request)
    {
        $request->validate([
            'report_code' => 'required',
            'access_key' => 'required'
        ]);

        $request->session()->put('report_code', $request->report_code);
        $request->session()->put('access_key', $request->access_key);

        $report_code = $request->report_code;
        $access_key = $request->access_key;

        // Retrieve the report from the database
        $report = Report::where('report_code', $report_code)->get()->first();
        if(!$report) {
            return redirect()->route('report.show')->withErrors('Kode laporan atau kode akses tidak benar.');
        }

        // Create an instance of CustomEncryptor with the provided access key
        $encryptor = new CustomEncryptor($access_key);

        // Decrypt the hashed report code
        try {
            $decrypted_report_code = $encryptor->decrypt($report->hashed_report_code);
        } catch (\Exception $e) {
            return redirect()->route('report.show')->withErrors('Kode laporan atau kode akses tidak benar.');
        }

        // Compare the decrypted report code with the provided report code
        if ($decrypted_report_code == $report_code) {
            $data = [
                'report' => $report,
                'images' => ReportImage::where('report_id', $report->id)->get()
            ];
            return view('report.view_post', ['data' => $data]);
        }

        return redirect()->route('report.show')->withErrors('Kode laporan atau kode akses tidak benar.');
    }

    public function indexDep()
    {
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

    public function showDep($report_code, $access_key)
    {
        // reverse hash the report_code using the access_key
        $hashed_report_code = "eyJpdiI6IjR4VlZLSnAyYWZ3V3o3cGN2WnJHUWc9PSIsInZhbHVlIjoiK0oycE1TU05Zam5kc0ZtQ3VUMVR6VU1FNDkvQWYwN0VQU1JXRldtbmhEUT0iLCJtYWMiOiJmMDg3YjJmMzJiOWU0OTVmNjI3MDAxOGUwZjk4MGVjMDJlODQ3ZTQzMGZhMDY4MGQ3YjEyNTc5NWVmNjYxZGM3IiwidGFnIjoiIn0=";
        $decrypted_report_code = decrypt($hashed_report_code, $access_key);
        if ($decrypted_report_code == $report_code) {
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

    public function showKota(Request $request)
    {
        $id = request()->query('id');
        $kotas = Kota::where('provinsi_id', $id)->orderBy('name', 'asc')->get();
        $kota_list = [];
        foreach ($kotas as $kota) {
            $kota_list[$kota->id] = $kota->name;
        }
        return response()->json([
            'message' => 'success',
            'data' => $kota_list
        ]);
    }

    public function showKecamatan(Request $request)
    {
        $id = request()->query('id');
        $kecamatans = Kecamatan::where('kota_id', $id)->orderBy('name', 'asc')->get();
        # make it into kecamatan_id => kecamatan_name
        $kecamatan_list = [];
        foreach ($kecamatans as $kecamatan) {
            $kecamatan_list[$kecamatan->id] = $kecamatan->name;
        }
        return response()->json([
            'message' => 'success',
            'data' => $kecamatan_list
        ]);
    }

    public function showKelurahan(Request $request)
    {
        $id = request()->query('id');
        $kelurahans = Kelurahan::where('kecamatan_id', $id)->orderBy('name', 'asc')->get();
        # make it into kelurahan_id => kelurahan_name
        $kelurahan_list = [];
        foreach ($kelurahans as $kelurahan) {
            $kelurahan_list[$kelurahan->id] = $kelurahan->name;
        }
        return response()->json([
            'message' => 'success',
            'data' => $kelurahan_list
        ]);
    }
}
