<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index(Request $request){
        $query = $request->input('query');
        if($query){
            session()->flash('query', $request->input('query'));
            $query = $request->input('query');
            $provinces = Provinsi::where('name', 'LIKE', "%{$query}%")
            ->orWhere('id', 'LIKE', "%{$query}%")
            ->paginate(5);
            return view('admin.province.search', ['data' =>$provinces]);
        }
        $provinces = Provinsi::paginate(5);
        return view('admin.province.index', ['data' => $provinces]);
    }

    public function create(){
        return view('admin.province.create');
    }

    public function store(Request $request){

        $request->validate([
            'name'=> 'required',
        ]);



        $data =[
            'name' =>$request->input('name'),
        ];

        // dd($data);

        $check = Provinsi::where('name', $data['name'])->first();

        if($check){
            return redirect()->back()->withErrors(['Name already exists']);
        }

        Provinsi::create($data);
        return redirect()->route('province.index')->with('success', 'Province added succesfully');
    }

    public function edit($id){
        $provinsi = Provinsi::find($id);
        return view('admin.province.edit', ['provinsi' =>$provinsi]);
    }

    public function update(Request $request, $id){
        //    dd($request);
        $provinsi = Provinsi::find($id);
        if(!$provinsi){
            return redirect()->back()->withErrors(['Province does not exist']);
        }

        $request->validate([
            'name'=> 'required',
        ]);



        $data =[
            'name' =>$request->input('name'),
        ];

        // dd($data);

        $check = Provinsi::where('name', $data['name'])->first();

        if($check){
            return redirect()->back()->withErrors(['Name already exists']);
        }

        $provinsi->update($data);
        return redirect()->route('province.index')->with('success', 'Province added succesfully');
    }

    public function destroy(Request $request, $id){
        $provinsi = Provinsi::find($id);
        if(!$provinsi){
            return redirect()->back()->withErrors(['Provinsi doesn not exist']);
        }

        $provinsi->delete();
        return redirect()->back()->with('success', 'Provinsi deleted successfully');
    }
}




