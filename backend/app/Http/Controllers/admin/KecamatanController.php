<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kecamatan;
use App\Models\Kota;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index(){
        $kecamatans = Kecamatan::all();
        return view('admin.kecamatan.index', ['data' => $kecamatans]);
    }

    public function create(){
        $cities = Kota::all();
        return view('admin.kecamatan.create', ['data' => $cities]);
    }

    public function store(Request $request){

        // dd($request);
        $request->validate([
            'name'=> 'required',
            'city'=> 'required'
        ]);

        $city_id = Kota::where('name', $request->input('city'))->first()->id;


        $data =[
            'name' =>$request->input('name'),
            'kota_id' => $city_id
        ];

        // dd($data);

        $check = Kecamatan::where('name', $data['name'])->first();

        if($check){
            return redirect()->back()->withErrors(['Name already exists']);
        }

        Kecamatan::create($data);
        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan added succesfully');
    }

    public function edit($id){
        $cities = Kota::all();
        $kecamatan = Kecamatan::find($id);
        return view('admin.kecamatan.edit', ['data' =>$cities, 'kecamatan' =>$kecamatan]);
    }

    public function update(Request $request, $id){
        //    dd($request);
        $kecamatan = Kecamatan::find($id);
        if(!$kecamatan){
            return redirect()->back()->withErrors(['Kecamatan does not exist']);
        }

        $request->validate([
            'name'=> 'required',
            'city'=> 'required'
        ]);

        $city_id = Kota::where('name', $request->input('city'))->first()->id;


        $data =[
            'name' =>$request->input('name'),
            'kota_id' => $city_id
        ];

        // dd($data);

        $check = Kecamatan::where('name', $data['name'])->first();

        if($check){
            return redirect()->back()->withErrors(['Name already exists']);
        }

        $kecamatan->update($data);
        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan edited succesfully');
    }

    public function destroy(Request $request, $id){
        $kecamatan = Kecamatan::find($id);
        if(!$kecamatan){
            return redirect()->back()->withErrors(['Kecamatan doesn not exist']);
        }

        $kecamatan->delete();
        return redirect()->back()->with('success', 'Kecamatan deleted successfully');
    }
}
