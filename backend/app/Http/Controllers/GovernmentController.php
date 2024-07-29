<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ThisCase;
use App\Models\Milestone;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Case_;
use App\Models\MilestoneDetail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GovernmentController extends Controller
{
    function home()
    {
        $dataIncomplete = auth()->user()->cases;
        $dataIncomplete = $dataIncomplete->filter(function ($case) {
            return MilestoneDetail::where('milestone_id', $case->id)->doesntExist();
        })->count();

        $dataProcess = auth()->user()->cases;
        $dataprocess = $dataProcess->filter(function ($case) {
            return MilestoneDetail::where('case_id', $case->id)->where('milestone_id', 6)->doesntExist() && MilestoneDetail::where('milestone_id', $case->id)->exists();
        })->count();

        $dataDone = auth()->user()->cases;
        $dataDone = $dataDone->filter(function ($case) {
            return MilestoneDetail::where('case_id', $case->id)->where('milestone_id', 6)->exists();
        })->count();

        $data = auth()->user()->cases;
        $data = $data->filter(function ($case) {
            return MilestoneDetail::where('milestone_id', $case->id)->doesntExist();
        });

        return view('government.home', ['dataIncomplete' => $dataIncomplete, 'dataProcess' => $dataprocess, 'dataDone' => $dataDone, "data" => $data]);
    }

    function dashboard()
    {
        return view('government.dashboard');
    }

    function tindakan()
    {
        $data = auth()->user()->cases;
        $data = $data->filter(function ($case) {
            return MilestoneDetail::where('case_id', $case->id)->doesntExist();
        });

        return view('government.tindakan', ['data' => $data]);
    }

    function milestone($id)
    {

        $cases = auth()->user()->cases;
        $caseIds = $cases->pluck('id')->toArray();
        $data = MilestoneDetail::whereIn('case_id', $caseIds)
            ->where('milestone_id', $id)
            ->get();

        // dd($data);

        return view('government.perkembangan.milestone', ['data' => $data]);
    }

    function search(Request $request)
    {
        $data = auth()->user()->cases;
        $data = $data->filter(function ($case) {
            return MilestoneDetail::where('milestone_id', $case->id)->doesntExist();
        });

        $data = $data->filter(function ($case) use ($request) {
            return $case->title == $request->name;
        });

        return view('government.perkembangan.milestone', ['data' => $data]);
    }

    // khusus button tindakan
    function tindakanStore(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'case_id' => 'required',
            'description' => 'required'
        ]);

        $case = ThisCase::findOrfail($request->case_id);
        if(auth()->user()->id != $case->government_id){
            return redirect()->back()->withErrors(['Anda tidak memiliki akses']);
        }

        $milestone_details = $case->milestone_details;
        // $milestone_details = MilestoneDetail::where('case_id', $case->id)->get();

        if($milestone_details->count() == 0){
            MilestoneDetail::create([
                'milestone_id' => 1,
                'case_id' => $request->case_id,
                'description' => $request->description
            ]);
            return redirect()->back()->with('success', 'Tindakan berhasil ditambahkan');
        }

        $lastMilestone = $milestone_details->last();
        if($lastMilestone->milestone_id == 6){
            return redirect()->back()->withErrors(['Tindakan sudah selesai']);
        }

        MilestoneDetail::create([
            'milestone_id' => $lastMilestone->milestone_id + 1,
            'case_id' => $request->case_id,
            'description' => $request->description
        ]);
        return redirect()->back()->with('success', 'Tindakan berhasil ditambahkan');
    }

    function tindakanDestroy(Request $request)
    {
        $request->validate([
            'case_id' => 'required',
        ]);
        $id = $request->case_id;
        $case = ThisCase::findOrfail($id);
        if(auth()->user()->id != $case->government_id){
            return redirect()->back()->withErrors(['Anda tidak memiliki akses']);
        }

        $milestone_details = $case->milestone_details;

        // dd($milestone_details);

        if($milestone_details->count() == 0){
            return redirect()->back()->withErrors(['Tindakan tidak ditemukan']);
        }

        $lastMilestone = $milestone_details->last();

        if($lastMilestone) {
            DB::table('milestone_details')
                ->where('case_id', $lastMilestone->case_id)
                ->where('milestone_id', $lastMilestone->milestone_id)
                ->delete();
        }

        return redirect()->back()->with('success', 'Tindakan berhasil dihapus');
    }
}
