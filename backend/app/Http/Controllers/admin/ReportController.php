<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DamageType;
use App\Models\Kelurahan;
use App\Models\Report;
use App\Models\ThisCase;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $reports = Report::paginate(5);
        return view('admin.report.index', ['data' => $reports]);
    }

    public function unsolvedIndex(){
        $reports = Report::where('case_id', null)->paginate(5);
        return view('admin.report.index', ['data' => $reports]);
    }

    public function details($id){
        $report = Report::where('id', $id)->first();
        // dd($case);
        return view('admin.report.details', ['data' => $report]);
    }

    public function create(){
        $data =[
            'damage_type' => DamageType::all(),
            'user' => User::where('role', 'user')->get(),
            'case' => ThisCase::all(),
            'kelurahan' => Kelurahan::all()

        ];
        return view('admin.report.create',['data' => $data]);
    }

    public function store(Request $request){

        // dd($request);
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'address'=> 'required',
            'anonymous' => 'required',
            'email'=> 'required',
            'user' => 'required',
            // 'case_id'=> 'required',
            'damage_type'=> 'required',
            'kelurahan' => 'required',
        ]);

        if($request->input('anonymous') == 'Yes'){
            $anonymous = 1;
        }elseif($request->input('anonymous') == 'No'){
            $anonymous = 0;
        }

        $kelurahan_id = Kelurahan::where('name', $request->input('kelurahan'))->first()->id;
        $created_by = User::where('name', $request->input('user'))->first()->id;
        $damage_type_id = DamageType::where('name', $request->input('damage_type'))->first()->id;
        // $case_id = ThisCase::where('title', $request->input('case'))->first()->id;

        $data =[
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'address'=> $request->input('address'),
            'anonymous'=> $anonymous,
            'email'=> $request->input('email'),
            'user_id' => $created_by,
            'damage_type_id' => $damage_type_id,
            'kelurahan_id' => $kelurahan_id,
            'report_code' => bin2hex(random_bytes(40)),

        ];



        Report::create($data);
        return redirect()->route('admin.report.index')->with('success', 'Report added succesfully');
    }

    public function edit($id){
        $data =[
            'damage_type' => DamageType::all(),
            'user' => User::where('role', 'user')->get(),
            'case' => ThisCase::all(),
            'kelurahan' => Kelurahan::all()

        ];
        $report = Report::find($id);
        return view('admin.report.edit',['data' => $data, 'report' => $report]);
    }

    public function update(Request $request, $id){

        $report = Report::find($id);

            // dd($request)
            $request->validate([
                'title'=> 'required',
                'description'=> 'required',
                'address'=> 'required',
                'anonymous' => 'required',
                'email'=> 'required',
                'user' => 'required',
                // 'case_id'=> 'required',
                'damage_type'=> 'required',
                'kelurahan' => 'required',
            ]);

            if($request->input('anonymous') == 'Yes'){
                $anonymous = 1;
            }elseif($request->input('anonymous') == 'No'){
                $anonymous = 0;
            }

            $kelurahan_id = Kelurahan::where('name', $request->input('kelurahan'))->first()->id;
            $created_by = User::where('name', $request->input('user'))->first()->id;
            $damage_type_id = DamageType::where('name', $request->input('damage_type'))->first()->id;
            // $case_id = ThisCase::where('title', $request->input('case'))->first()->id;

            $data =[
                'title'=> $request->input('title'),
                'description'=> $request->input('description'),
                'address'=> $request->input('address'),
                'anonymous'=> $anonymous,
                'email'=> $request->input('email'),
                'user_id' => $created_by,
                'damage_type_id' => $damage_type_id,
                'kelurahan_id' => $kelurahan_id,
                'report_code' => bin2hex(random_bytes(40)),

            ];

        $report->update($data);
        return redirect()->route('admin.report.index')->with('success', 'Report edited succesfully');
    }


    public function destroy(Request $request, $id){
        $report = Report::find($id);
        if(!$report){
            return redirect()->back()->withErrors(['Report doesn not exist']);
        }

        $report->delete();
        return redirect()->back()->with('success', 'Report deleted successfully');
    }


}
