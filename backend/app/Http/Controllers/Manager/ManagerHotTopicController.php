<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\DamageType;
use App\Models\Kelurahan;
use App\Models\Report;
use App\Models\ThisCase;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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


    public function storeHotTopic(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'address' => 'required|string',
            'kelurahan' => 'required|string',
            'damage_type' => 'required|string',
        ]);

        $request->merge(['case_number' => bin2hex(random_bytes(40))]);

        $damage_type_id = DamageType::where('name', $request->input('damage_type'))->first()->id;
        $request->merge(['damage_type' => $damage_type_id]);

        $kelurahan_id = Kelurahan::where('name', $request->input('kelurahan'))->first()->id;
        $request->merge(['kelurahan' => $kelurahan_id]);

        // find user that has role government
        // $government_id = User::where('role', 'government');
        $government_id = User::where('role', 'government')->inRandomOrder()->first()->id;

        // dd($government_id);

        $data = ([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'kelurahan_id' => $kelurahan_id,
            'damage_type_id' => $damage_type_id,
            'status' => 0,
            'case_number' => $request->input('case_number'),
            'government_id' => $government_id,
            'created_by' => Auth::user()->id,
        ]);

        $temp = ThisCase::create($data);

        $reports = $request->input('reports');
        $reports = explode(',', $reports);

        foreach ($reports as $report) {
            $report = Report::find($report);
            $report->case_id = $temp->id;
            foreach ($report->images as $image) {
                $image->case_id = $temp->id;
                $image->save();
            }
            $report->save();
        }


        return redirect()->route('manager.hot_topic');
    }

    public function viewSelectedReports(Request $request)
    {
        // convert string input to array
        $finselectedIds = explode(',', $request->input('reports'));

        // filter valid ID(?)
        $finselectedIds = array_filter($finselectedIds, function ($id) {
            return is_numeric($id);
        });

        $selectedLaporans = Report::whereIn('id', $finselectedIds)->paginate(7);
        $selectedCount = count($selectedLaporans);

        $hot_topics = ThisCase::all();
        return view('manager.tambah_kasus.tambah_1', ['selectedLaporans' => $selectedLaporans, 'selectedCount' => $selectedCount, 'hot_topics' => $hot_topics]);
    }

    public function dropdownHotTopic()
    {
        $datas = ThisCase::all();
        return $datas;
    }

    public function update_case_id(Request $request)
    {
        $hot_topic_selected = $request->input('report_selected');
        $reports = $request->input('reports');
        $reports = explode(',', $reports);
        // dd($request->all());
        // dd($reports);
        foreach ($reports as $report) {
            $report = Report::find($report);
            $report->case_id = $hot_topic_selected;
            $report->save();
        }

        return redirect()->route('manager.hot_topic');
    }
}
