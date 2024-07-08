<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Milestone;
use App\Models\MilestoneDetail;
use Illuminate\Http\Request;

class MilestoneController extends Controller
{
    public function index(Request $request){
        $query = $request->input('query');
        if($query){
            session()->flash('query', $request->input('query'));
            $query = $request->input('query');
            $milestones = Milestone::where('title', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('id', 'LIKE', "%{$query}%")
            ->paginate(5);
            return view('admin.milestone.search', ['data' =>$milestones]);
        }
        $milestones = Milestone::paginate(5);
        return view('admin.milestone.index', ['data' => $milestones]);
    }

    public function details($id){
        $milestone = Milestone::where('id', $id)->first();
        $milestone_details = MilestoneDetail::where('milestone_id', $milestone->id)->paginate(5);
        // dd($milestone_details);
        return view('admin.milestone.details', ['data' => $milestone, 'detail' =>$milestone_details]);
    }

    public function create(){
        return view('admin.milestone.create');
    }

    public function store(Request $request){

        // dd($request);
        $request->validate([
            'title'=> 'required',
            'description'=> 'required'
        ]);


        $data =[
            'title' =>$request->input('title'),
            'description' =>$request->input('description'),
        ];

        // dd($data);

        $check = Milestone::where('title', $data['title'])->first();

        if($check){
            return redirect()->back()->withErrors(['Title already exists']);
        }

        Milestone::create($data);
        return redirect()->route('milestone.index')->with('success', 'Milestone added succesfully');
    }

    public function edit($id){
        $milestone = Milestone::find($id);
        return view('admin.milestone.edit', ['milestone' =>$milestone]);
    }

    public function update(Request $request, $id){
        $milestone = Milestone::find($id);
        if(!$milestone){
            return redirect()->back()->withErrors(['Milestone does not exist']);
        }

        $request->validate([
            'title'=> 'required',
            'description'=> 'required'
        ]);


        $data =[
            'title' =>$request->input('title'),
            'description' =>$request->input('description'),
        ];

        // dd($data);

        $check = Milestone::where('title', $data['title'])->first();

        if($check){
            return redirect()->back()->withErrors(['Title already exists']);
        }

        $milestone->update($data);
        return redirect()->route('milestone.index')->with('success', 'milestone edited succesfully');
    }

    public function destroy(Request $request, $id){
        $milestone = Milestone::find($id);

        if(!$milestone){
            return redirect()->back()->withErrors(['Milestone doesn not exist']);
        }

        $milestone->delete();
        return redirect()->back()->with('success', 'Milestone deleted successfully');
    }


}
