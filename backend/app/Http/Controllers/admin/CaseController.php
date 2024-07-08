<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DamageType;
use App\Models\Kelurahan;
use App\Models\Kota;
use App\Models\Report;
use App\Models\ThisCase;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Case_;

class CaseController extends Controller
{
    public function index(){
        $cases = ThisCase::paginate(5);
        return view('admin.case.index', ['data' => $cases]);
    }

    public function details($id){
        $case = ThisCase::where('id', $id)->first();
        // dd($case);
        return view('admin.case.details', ['data' => $case]);
    }

    public function create(){
        $data =[
            'damage_type' => DamageType::all(),
            'government' => User::where('role', 'government')->get(),
            'user' => User::where('role', 'user')->get(),
            'kelurahan' => Kelurahan::all()
        ];
        return view('admin.case.create',['data' => $data]);
    }

    public function store(Request $request){

        // dd($request);

        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'address'=> 'required',
            'coordinate' => 'required',
            'kelurahan'=> 'required',
            'government'=> 'required',
            'damage_type'=> 'required',
            'user' => 'required'
        ]);       
        
        $kelurahan_id = Kelurahan::where('name', $request->input('kelurahan'))->first()->id;
        $government_id = User::where('name', $request->input('government'))->first()->id;
        $created_by = User::where('name', $request->input('user'))->first()->id;
        $damage_type_id = DamageType::where('name', $request->input('damage_type'))->first()->id;

        $data =[
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'address'=> $request->input('address'),
            'coordinate'=> $request->input('coordinate'),
            'kelurahan_id' => $kelurahan_id,
            'government_id' => $government_id,
            'created_by' => $created_by,
            'damage_type_id' => $damage_type_id,
            'status' => 0,
            'case_number' => bin2hex(random_bytes(40)),

        ];

 

        ThisCase::create($data);
        return redirect()->route('case.index')->with('success', 'Case added succesfully');
    }

    public function edit($id){
        $data =[
            'damage_type' => DamageType::all(),
            'government' => User::where('role', 'government')->get(),
            'user' => User::where('role', 'user')->get(),
            'kelurahan' => Kelurahan::all()
        ];
        $case = ThisCase::find($id);
        return view('admin.case.edit',['data' => $data, 'case' => $case]);
    }

    public function update(Request $request, $id){

        $case = ThisCase::find($id);

        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'address'=> 'required',
            'coordinate' => 'required',
            'kelurahan'=> 'required',
            'government'=> 'required',
            'damage_type'=> 'required',
            'user' => 'required'
        ]);       
        
        $kelurahan_id = Kelurahan::where('name', $request->input('kelurahan'))->first()->id;
        $government_id = User::where('name', $request->input('government'))->first()->id;
        $created_by = User::where('name', $request->input('user'))->first()->id;
        $damage_type_id = DamageType::where('name', $request->input('damage_type'))->first()->id;

        $data =[
            'title'=> $request->input('title'),
            'description'=> $request->input('description'),
            'address'=> $request->input('address'),
            'coordinate'=> $request->input('coordinate'),
            'kelurahan_id' => $kelurahan_id,
            'government_id' => $government_id,
            'created_by' => $created_by,
            'damage_type_id' => $damage_type_id,
            'status' => 0,

        ];

 

        $case->update($data);
        return redirect()->route('case.index')->with('success', 'Case edited succesfully');
    }

 

    public function destroy(Request $request, $id){
        $case = ThisCase::find($id);
        if(!$case){
            return redirect()->back()->withErrors(['Case doesn not exist']);
        }

        $case->delete();
        return redirect()->back()->with('success', 'Case deleted successfully');
    }

}
