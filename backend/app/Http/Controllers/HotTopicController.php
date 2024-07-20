<?php

namespace App\Http\Controllers;

use App\Models\ThisCase;
use Illuminate\Http\Request;

class HotTopicController extends Controller
{
    public function index(){
        $cases = ThisCase::all();
        //sort cases by number of reports $case->report->count()
        $cases = $cases->sortByDesc(function($case){
            return $case->reports->count();
        });
        // dump($cases);
        // sort cases by
        return view('hottopic.index', ['cases' => $cases]);
    }

    public function detail($case_number){
        $case = ThisCase::where('case_number', $case_number)->first();
        return view('hottopic.detail', ['case' => $case]);
    }
}
