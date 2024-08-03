<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = Kota::paginate(5);
        return view('admin.city.index', ['data' => $cities]);
    }

    public function create(){
        $provinces = Provinsi::all();
        return view('admin.city.create', ['data' => $provinces]);
    }

    public function store(Request $request){

        // dd($request);
        $request->validate([
            'name'=> 'required',
            'province'=> 'required'
        ]);

        $province_id = Provinsi::where('name', $request->input('province'))->first()->id;


        $data =[
            'name' =>$request->input('name'),
            'provinsi_id' => $province_id
        ];

        // dd($data);

        $check = Kota::where('name', $data['name'])->first();

        if($check){
            return redirect()->back()->withErrors(['Name already exists']);
        }

        Kota::create($data);
        return redirect()->route('city.index')->with('success', 'City added succesfully');
    }

    public function edit($id){
        $provinces = Provinsi::all();
        $city = Kota::find($id);
        return view('admin.city.edit', ['data' =>$provinces, 'city' =>$city]);
    }

    public function update(Request $request, $id){
        $city = Kota::find($id);
        if(!$city){
            return redirect()->back()->withErrors(['City does not exist']);
        }

        $request->validate([
            'name'=> 'required',
            'province'=> 'required'
        ]);

        $province_id = Provinsi::where('name', $request->input('province'))->first()->id;


        $data =[
            'name' =>$request->input('name'),
            'provinsi_id' => $province_id
        ];

        // dd($data);

        $check = Kota::where('name', $data['name'])->first();

        if($check){
            return redirect()->back()->withErrors(['Name already exists']);
        }

        $city->update($data);
        return redirect()->route('city.index')->with('success', 'City edited succesfully');
    }

    public function destroy(Request $request, $id){
        $city = Kota::find($id);
        if(!$city){
            return redirect()->back()->withErrors(['City doesn not exist']);
        }

        $city->delete();
        return redirect()->back()->with('success', 'Student deleted successfully');
    }

}
