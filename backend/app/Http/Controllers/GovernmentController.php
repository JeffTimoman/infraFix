<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ThisCase;
use App\Models\Milestone;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Case_;
use App\Http\Controllers\Controller;

class GovernmentController extends Controller
{
    function home(){
        return view('government.home');
    }

    function dashboard(){
        return view('government.dashboard');
    }

    function tindakan(){
        $data = ThisCase::where('government_id', auth()->user()->id)->get();

        return view('government.tindakan', ['data' => $data]);
    }

    function milestone($id){

        // $milestones = Milestone::find($id);
        // $data = $milestones->cases()->where('government_id', $govId)->paginate(5);

        $alldata = ThisCase::where('government_id', auth()->user()->id)->get();
        $data = collect();

        foreach ($alldata as $item) {
            $milestones = $item->milestone_details()->where('milestone_id', $id)->get();
            $data = $data->merge($milestones);
        }

        // $data = $alldata->milestone_details()->where('milestone_id', $id)->get();

        return view('government.perkembangan.milestone', ['data' => $data]);
    }
}
