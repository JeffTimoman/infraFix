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

    public function edit($userId)
    {
        $user = User::findOrFail($userId);
        return view('profile.edit', ['user' => $user]);
    }

    public function update(Request $request, $userId){
        // dump($user);
        $user = User::findOrFail($userId);
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Update user details
        $user->update([
            'username' => $request->username,
            'email' => $request->email,
        ]);

        // Check if an image was uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('upload/profilepicture'), $imageName);

            // Update the profile picture
            $user->update([
                'profile_picture' => $imageName,
            ]);
        }
        return view('profile.profile', ['user' => $user])->with('success', 'Profile updated successfully.');
    }

    public function password(User $user){
        return view('profile.password', ['user' => $user]);
    }

    public function changePassword(Request $request, $userId){
        // dump($request);
        $user = User::find($userId);
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
}
