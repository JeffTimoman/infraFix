<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\DamageType;
use App\Models\Kelurahan;
use App\Models\Report;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManagerHotTopicController extends Controller
{
    public function clearSelectedLaporans()
    {
        session()->forget('finselectedIds');
        return redirect()->route('manager.laporan_belum_unggah');
    }

    public function viewSelectedLaporans(Request $request)
    {
        // convert string input to array
        $finselectedIds = explode(',', $request->input('reports'));

        // filter valid ID(?)
        $finselectedIds = array_filter($finselectedIds, function ($id) {
            return is_numeric($id);
        });

        $selectedLaporans = Report::whereIn('id', $finselectedIds)->paginate(7);
        $selectedCount = count($selectedLaporans);
        return view('manager.unggah_kasus.unggah_1', ['selectedLaporans' => $selectedLaporans, 'selectedCount' => $selectedCount]);
    }

    public function dropdownData()
    {
        $datas = [
            'damage_type' => DamageType::all(),
            'kelurahan' => Kelurahan::all(),
        ];
        return $datas;
    }

    public function dropdown_unggah()
    {
        $datas = $this->dropdownData();
        return view('manager.unggah_kasus.scroll.isi_kasus', ['datas' => $datas]);
    }

    public function fetchNames(Request $request)
    {
        $damageId = $request->get('damage_id');
        $kelurahanId = $request->get('kelurahan_id');

        $damage = DamageType::find($damageId);
        $kelurahan = Kelurahan::find($kelurahanId);

        $response = [
            'damage_name' => $damage ? $damage->name : null,
            'kelurahan_name' => $kelurahan ? $kelurahan->name : null,
        ];

        return response()->json($response);
    }

    public function storeHotTpic(Request $request)
    {
        // $input = new FormInput();
        // $input->inputField = $request->input('inputField');
        // $input->save();

        return redirect()->back();
    }

    public function getSummary()
    {
        // $inputs = FormInput::all();
        // return view('summary', ['inputs' => $inputs]);
    }

    // public function test()
    // {
    //     return view('manager.unggah_kasus.unggah_1');
    // }
}