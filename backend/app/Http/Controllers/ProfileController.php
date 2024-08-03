<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show(User $user){
    //    $user = User::find(4);
        return view('profile.profile', ['user' => $user]);
    }

    public function edit(){
        return view('profile.edit');
    }

    public function update(Request $request){
        // dump($request->all());
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'User not found']);
        }

        $imageName = time() . '.' . $request->file('image')->extension();

        $request->file('image')->move(public_path('upload/profilepicture'), $imageName);

        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'profile_picture' => $imageName,
        ]);

        return view('profile.profile', ['user' => $user])->with('success', 'Profile updated successfully.');
    }

    public function password(){
        return view('profile.password');
    }

    public function changePassword(Request $request, $user){
        // dump($request);
        // $user = User::find(4);
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);
        if (Hash::check($request->current_password, $user->password)) {
            if ($request->new_password === $request->confirm_password) {
                $user->password = Hash::make($request->new_password);
                $user->save();
                return view('profile.profile', ['user' => $user])->with('success', 'Password updated successfully.');
            } else {
                return redirect()->back()->withErrors('Confirm password does not match');
            }
        } else {
            return redirect()->back()->withErrors(['Password incorrect']);
        }
        return view('profile.profile',  ['user' => $user]);
    }
    
    public function forgetpassword(){
        return view('profile.forgetpassword');
    }

}
