<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index(){
        $kelurahans = Kelurahan::all();
        return view('admin.kelurahan.index', ['data' => $kelurahans]);
    }


    public function create(){
        $kecamatans = Kecamatan::all();
        return view('admin.kelurahan.create', ['data' => $kecamatans]);
    }

    public function store(Request $request){

        $request->validate([
            'name'=> 'required',
            'kecamatan'=> 'required'
        ]);

        $kecamatan_id = Kecamatan::where('name', $request->input('kecamatan'))->first()->id;


        $data =[
            'name' =>$request->input('name'),
            'kecamatan_id' => $kecamatan_id
        ];

        // dd($data);

        $check = Kelurahan::where('name', $data['name'])->first();

        if($check){
            return redirect()->back()->withErrors(['Name already exists']);
        }

        Kelurahan::create($data);
        return redirect()->route('kelurahan.index')->with('success', 'kelurahan added succesfully');
    }

    public function edit($id){
        $kecamatans = Kecamatan::all();
        $kelurahan = Kelurahan::find($id);
        return view('admin.kelurahan.edit', ['data' =>$kecamatans, 'kelurahan' =>$kelurahan]);
    }

    public function update(Request $request, $id){
        //    dd($request);
        $kelurahan = Kelurahan::find($id);
        if(!$kelurahan){
            return redirect()->back()->withErrors(['Kelurahan does not exist']);
        }

        $request->validate([
            'name'=> 'required',
            'kecamatan'=> 'required'
        ]);

        $kecamatan_id = Kecamatan::where('name', $request->input('kecamatan'))->first()->id;


        $data =[
            'name' =>$request->input('name'),
            'kecamatan_id' => $kecamatan_id
        ];

        // dd($data);

        $check = Kelurahan::where('name', $data['name'])->first();

        if($check){
            return redirect()->back()->withErrors(['Name already exists']);
        }


        $kelurahan->update($data);
        return redirect()->route('kelurahan.index')->with('success', 'Kelurahan edited succesfully');
    }

    public function destroy(Request $request, $id){
        $kelurahan = Kelurahan::find($id);
        if(!$kelurahan){
            return redirect()->back()->withErrors(['Kelurahan doesn not exist']);
        }

        $kelurahan->delete();
        return redirect()->back()->with('success', 'Kelurahan deleted successfully');
    }
}
