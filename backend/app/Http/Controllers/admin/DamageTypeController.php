<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\DamageType;
use Illuminate\Http\Request;

class DamageTypeController extends Controller
{
    public function index(){
        $damage_types = DamageType::paginate(5);
        return view('admin.damage_type.index', ['data' => $damage_types]);
    }

    public function create(){
        return view('admin.damage_type.create');
    }

    public function store(Request $request){

        // dd($request);
        $request->validate([
            'name'=> 'required',
        ]);       
                
        $data = [
            'name' => $request->input('name')
        ];

        $check = DamageType::where('name', $data['name'])->first();

        if($check){
            return redirect()->back()->withErrors(['Name already exists']);
        }

        DamageType::create($data);
        return redirect()->route('damage_type.index')->with('success', 'Damage Type added succesfully');
    }

    public function edit($id){
        $damage = DamageType::find($id);
        return view('admin.damage_type.edit', ['data' =>$damage]);
    }

    public function update(Request $request, $id){
        $damage = DamageType::find($id);
        if(!$damage){
            return redirect()->back()->withErrors(['Damage Type does not exist']);
        }
      
        $request->validate([
            'name'=> 'required',
        ]);       
        
        
        $data = [
            'name' => $request->input('name')
        ];

        $check = DamageType::where('name', $data['name'])->first();

        if($check){
            return redirect()->back()->withErrors(['Name already exists']);
        }

        $damage->update($data);
        return redirect()->route('damage_type.index')->with('success', 'Damage Type edited succesfully');
    }

    public function destroy(Request $request, $id){
        $damage = DamageType::find($id);
        if(!$damage){
            return redirect()->back()->withErrors(['Damage Type doesn not exist']);
        }

        $damage->delete();
        return redirect()->back()->with('success', 'Damage Type deleted successfully');
    }
}
