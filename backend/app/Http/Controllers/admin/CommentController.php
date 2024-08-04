<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ThisCase;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        // dd($comments);
        return view('admin.comment.index', ['data' => $comments]);
    }

    public function details($id){
        $comment = Comment::where('id', $id)->first();
        // dd($milestone_details);
        return view('admin.comment.details', ['data' => $comment]);
    }

    public function create(){
        $data =[
            'user' => User::where('role', 'user')->get(),
            'case' => ThisCase::all(),

        ];

        return view('admin.comment.create', ['data' => $data]);
    }

    public function store(Request $request){

        // dd($request);
        $request->validate([
            'anonymous'=> 'required',
            'banned'=> 'required',
            'user' => 'required',
            // 'case' => 'required',
            'content' => 'required'
        ]);

        if($request->input('anonymous') == 'Yes'){
            $anonymous = 1;
        }elseif($request->input('anonymous') == 'No'){
            $anonymous = 0;
        }

        if($request->input('banned') == 'Yes'){
            $banned = 1;
        }elseif($request->input('banned') == 'No'){
            $banned = 0;
        }

        // $case_id = ThisCase::where('title', $request->input('case'))->first()->id;
        $user_id = User::where('name', $request->input('user'))->first()->id;


        $data =[
            'anonymous'=> $anonymous,
            'banned'=> $banned,
            'user_id' => $user_id,
            // 'case_id' => $case_id,
            'content' => $request->input('content')
        ];


        // dd($data);

        Comment::create($data);
        return redirect()->route('comment.index')->with('success', 'Comment added succesfully');
    }

    public function edit($id){
        $comment = Comment::find($id);
        $data =[
            'user' => User::where('role', 'user')->get(),
            'case' => ThisCase::all(),

        ];
        return view('admin.comment.edit', ['data' => $data, 'comment' =>$comment]);
    }

    public function update(Request $request, $id){
        $comment = Comment::find($id);
        if(!$comment){
            return redirect()->back()->withErrors(['Milestone does not exist']);
        }

        $request->validate([
            'anonymous'=> 'required',
            'banned'=> 'required',
            'user' => 'required',
            // 'case' => 'required',
            'content' => 'required'
        ]);

        if($request->input('anonymous') == 'Yes'){
            $anonymous = 1;
        }elseif($request->input('anonymous') == 'No'){
            $anonymous = 0;
        }

        if($request->input('banned') == 'Yes'){
            $banned = 1;
        }elseif($request->input('banned') == 'No'){
            $banned = 0;
        }

        // $case_id = ThisCase::where('title', $request->input('case'))->first()->id;
        $user_id = User::where('name', $request->input('user'))->first()->id;


        $data =[
            'anonymous'=> $anonymous,
            'banned'=> $banned,
            'user_id' => $user_id,
            // 'case_id' => $case_id,
            'content' => $request->input('content')
        ];
        $comment->update($data);
        return redirect()->route('comment.index')->with('success', 'Comment edited succesfully');
    }

    public function destroy(Request $request, $id){
        $comment = Comment::find($id);
        if(!$comment){
            return redirect()->back()->withErrors(['Milestone doesn not exist']);
        }

        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully');
    }

}
