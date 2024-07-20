<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HotTopicController extends Controller
{
    // public function selectLaporans(Request $request)
    // {
    //     $selectedIds = $request->input('selected_ids', []);
    //     $selectedLaporans = Report::whereIn('id', $selectedIds)->get();

    //     session(['selectedLaporans' => $selectedLaporans]);

    //     return redirect()->route('manager.unggah_1');
    // }

    // public function viewSelectedLaporans()
    // {
    //     $selectedLaporans = session('selectedLaporans', []);
    //     $selectedCount = count($selectedLaporans);
    //     return view('manager.unggah_kasus.unggah_1', ['selectedLaporans' => $selectedLaporans, 'selectedCount' => $selectedCount]);
    // }

    public function selectLaporans(Request $request)
    {
        $selectedIds = $request->input('selected_ids', []);
        $existingSelectedIds = session('finselectedIds', []);

        $mergedSelectedIds = array_unique(array_merge($selectedIds, $existingSelectedIds));
        session(['finselectedIds' => $mergedSelectedIds]);

        // dump(session('finselectedIds'));

        return redirect()->route('manager.unggah_1');
    }

    public function viewSelectedLaporans()
    {
        $finselectedIds = session('finselectedIds', []);
        $selectedLaporans = Report::whereIn('id', $finselectedIds)->get();
        $selectedCount = count($selectedLaporans);
        return view('manager.unggah_kasus.unggah_1', ['selectedLaporans' => $selectedLaporans, 'selectedCount' => $selectedCount]);
    }

    public function clearSelectedLaporans()
    {
        session()->forget('finselectedIds');
        return redirect()->route('manager.laporan_belum_unggah');
    }

    public function updateCaseId(Request $request, Report $report)
    {
        $case_id = $request->input('case_id');
        $report->update(['case_id' => $case_id]);
        return redirect()->route('manager.unggah_2');
    }

    public function deleteSelectedLaporans(Request $request)
    {

        $laporans = $request->session()->get('finselectedIds', []);
        $selectedLaporanId = $request->input('selected_ids');
        if (($key = array_search($selectedLaporanId, array_column($laporans, 'id'))) !== false) {
            unset($laporans[$key]);
        }

        $request->session()->put('finselectedIds', $laporans);
        return redirect()->route('manager.unggah_1');
    }
}
