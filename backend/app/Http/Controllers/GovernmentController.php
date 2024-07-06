<?php

namespace App\Http\Controllers;

use App\Models\Milestone;
use App\Models\User;
use Illuminate\Http\Request;

class GovernmentController extends Controller
{
    function home(){
        return view('government.home');
    }

    function dashboard(){
        return view('government.dashboard');
    }

    function tindakan(){
        return view('government.tindakan');
    }

    function milestone($id, $govId){

        $milestones = Milestone::find($id);
        $data = $milestones->cases()->where('government_id', $govId)->paginate(5);

        return view('government.perkembangan.milestone', ['data' => $data]);
    }
}
