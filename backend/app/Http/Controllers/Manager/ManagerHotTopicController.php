<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ManagerHotTopicController extends Controller
{
    public function selectLaporans(Request $request)
    {
        $selectedIds = $request->input('selected_ids', []);
        $existingSelectedIds = session('finselectedIds', []);

        $mergedSelectedIds = array_unique(array_merge($selectedIds, $existingSelectedIds));
        session(['finselectedIds' => $mergedSelectedIds]);

        // dump(session('finselectedIds'));

        return redirect()->route('manager.unggah_1');
    }

    public function clearSelectedLaporans()
    {
        session()->forget('finselectedIds');
        return redirect()->route('manager.laporan_belum_unggah');
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

    public function viewSelectedLaporans(Request $request)
    {
        // save input to database
        // Data::create(['field_name' => $finselectedIds]);

        // convert string input to array
        $finselectedIds = explode(',', $request->input('reports'));

        // Filter valid ID(?)
        $finselectedIds = array_filter($finselectedIds, function ($id) {
            return is_numeric($id);
        });

        $selectedLaporans = Report::whereIn('id', $finselectedIds)->paginate(7);
        $selectedCount = count($selectedLaporans);
        return view('manager.unggah_kasus.unggah_1', ['selectedLaporans' => $selectedLaporans, 'selectedCount' => $selectedCount]);
    }
}
