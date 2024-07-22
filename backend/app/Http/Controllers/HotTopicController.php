<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\ThisCase;
use Illuminate\Http\Request;

class HotTopicController extends Controller
{
    public function index(Request $request){
        $cases = ThisCase::all();

        $year_start = $request->input('year_start');
        $year_end = $request->input('year_end');
        $month_start = $request->input('month_start');
        $month_end = $request->input('month_end');
        $unprocessed = ($request->input('unprocessed') == 'on') ? true : false;
        $processed = ($request->input('processed') == 'on') ? true : false;
        $finished = ($request->input('finished') == 'on') ? true : false;
        // dump($year_start, $year_end, $month_start, $month_end, $unprocessed, $processed, $finished);

        $cases = $cases -> filter(function($case) use ($year_start, $year_end, $month_start, $month_end){
            $date = $case->created_at;
            $year = $date->format('Y');
            $month = $date->format('m');
            if ($year_start && $year < $year_start) return false;
            if ($year_end && $year > $year_end) return false;
            if ($month_start && $month < $month_start) return false;
            if ($month_end && $month > $month_end) return false;
            return true;
        });

        // dump($cases);
        return view('hottopic.index', ['cases' => $cases]);
    }

    public function detail($case_number){
        $case = ThisCase::where('case_number', $case_number)->first();
        return view('hottopic.detail', ['case' => $case]);
    }

    public function addComment(Request $request){
        $case_number = $request->input('case_number');
        $comment = $request->input('content');

        if (!auth()->check()){
            return redirect()->back()->with('error', 'You need to login to add a comment.');
        }

        Comment::create([
            'content' => $comment,
            'case_id' => ThisCase::where('case_number', $case_number)->first()->id,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
