<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request){
        $query = $request->input('query');
        if($query){
            session()->flash('query', $request->input('query'));
            $query = $request->input('query');
            $users = User::where('name', 'LIKE', "%{$query}%")
            ->orWhere('email', 'LIKE', "%{$query}%")
            ->orWhere('username', 'LIKE', "%{$query}%")
            ->orWhere('role', 'LIKE', "%{$query}%")
            ->paginate(5);
            return view('admin.user.search', ['data' =>$users]);
        }
        $users = User::all();
        return view('admin.user.index', ['data' => $users]);
    }

    public function details($id){
        $user = User::where('id', $id)->first();
        // dd($case);
        return view('admin.user.details', ['data' => $user]);
    }


    public function create(){
        return view('admin.user.create');
    }

    public function store(Request $request){

        // dd($request);

        $request->validate([
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required',
            'password' => 'required',
            'date_of_birth'=> 'required',
            'role'=> 'required',
            'is_active'=> 'required',
            'email_verified_at' => 'required'
        ]);


        if($request->input('is_active') == 'Yes'){
            $is_active = 1;
        }elseif($request->input('is_active') == 'No'){
            $is_active = 0;
        }


        $data =[
            'name'=> $request->input('name'),
            'username'=> $request->input('username'),
            'email'=> $request->input('email'),
            'password' => $request->input(),
            'date_of_birth'=> $request->input('date_of_birth'),
            'role'=> $request->input('role'),
            'password' => Hash::make($request->input('password')),
            'is_active'=> $is_active,

        ];



        User::create($data);
        return redirect()->route('user.index')->with('success', 'User added succesfully');
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.user.edit',['user' => $user]);
    }

    public function update(Request $request, $id){

        $user = User::find($id);


        $request->validate([
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required',
            'password' => 'required',
            'date_of_birth'=> 'required',
            'role'=> 'required',
            'is_active'=> 'required',
            'email_verified_at' => 'required'
        ]);


        if($request->input('is_active') == 'Yes'){
            $is_active = 1;
        }elseif($request->input('is_active') == 'No'){
            $is_active = 0;
        }


        $data =[
            'name'=> $request->input('name'),
            'username'=> $request->input('username'),
            'email'=> $request->input('email'),
            'password' => $request->input(),
            'date_of_birth'=> $request->input('date_of_birth'),
            'role'=> $request->input('role'),
            'password' => Hash::make($request->input('password')),
            'is_active'=> $is_active,

        ];



        $user->update($data);
        return redirect()->route('user.index')->with('success', 'USer edited succesfully');
    }



    public function destroy(Request $request, $id){
        $user = user::find($id);
        if(!$user){
            return redirect()->back()->withErrors(['User doesn not exist']);
        }

        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }

}
