<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ThisCase;
use App\Models\Milestone;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Case_;
use App\Http\Controllers\Controller;
use App\Models\MilestoneDetail;

class GovernmentController extends Controller
{
    function home()
    {
        $dataIncomplete = auth()->user()->cases;
        $dataIncomplete = $dataIncomplete->filter(function ($case) {
            return MilestoneDetail::where('case_id', $case->id)->doesntExist();
        })->count();

        $dataProcess = auth()->user()->cases;
        $dataprocess = $dataProcess->filter(function ($case) {
            return MilestoneDetail::where('case_id', $case->id)->exists();
        })->count();

        $dataDone = auth()->user()->cases;
        $dataDone = $dataDone->filter(function ($case) {
            return MilestoneDetail::where('milestone_id', 6)->exists();
        })->count();

        return view('government.home', ['dataIncomplete' => $dataIncomplete, 'dataProcess' => $dataprocess]);


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

        return view('government.perkembangan.milestone', ['data' => $data]);
    }
}
