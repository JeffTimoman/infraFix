<?php

namespace App\Http\Controllers;

use App\Mail\PasswordResetMail;
use App\Mail\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    function showLoginForm(){
        return view('auth.login');
    }

    function login(Request $request){
        session()->flash('email', $request->email);
        $request->validate([
            'email' => 'required|string',
            'password' => 'required'
        ]);
        // dd($request->all());

        $login_type = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        // dd($login_type);
        $credentials = [
            $login_type => $request->email,
            'password' => $request->password
        ];


        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $userType = auth()->user()->role;
            // dd($userType);
            if($userType == 'admin'){
                return redirect()->route('admin.dashboard')->with('success', 'Login berhasil.');
            }else if($userType == 'government'){
                return redirect()->route('government.dashboard')->with('success', 'Login berhasil.');
            }else if($userType == 'manager'){
                return redirect()->route('manager.dashboard')->with('success', 'Login berhasil.');
            }else{
                return redirect()->route('hottopic.index')->with('success', 'Login berhasil.');
            }
        }
        return back()->withErrors([
            'Kredensial yang diberikan tidak cocok dengan catatan kami.'
        ]);
    }

    function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }

    public function showRegisterPage(){
        return view('auth.register');
    }

    public function register(Request $request){
        session()->flash('email', $request->email);
        session()->flash('name', $request->name);
        session()->flash('username', $request->username);
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'birth' => 'required|date',
            'password' => 'required|min:6',
            'confirm' => 'required_with:password|same:password|min:6',
            'username' => 'required|string',
        ]);



        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'birth' => $request->birth,
            'profile_pic' => 'default.jpg',
            'password' => bcrypt($request->password),
            'username' => $request->username,
            'role' => 'user'
        ];

        $check = User::where('email', $request->email)->orWhere('username', $request->username)->first();

        if($check){
            return back()->withErrors([
                'Email atau username sudah terdaftar. Coba lagi.'
            ]);
        }

        User::create($data);
        return redirect()->route('auth.login')->with('success', 'Akun berhasil dibuat. Silahkan login setelah konfirmasi email.');
    }

    public function resetPassword(){
        return view('auth.reset_password');
    }

    public function resetPasswordPost(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);

    }

    public function showResetForm($token){

        return view('auth.reset_form', ['token' => $token]);
    }

    public function resetFormPost(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();

                // Here you can also log the user in if you want:
                // Auth::login($user);
            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('auth.login')->with('success', __($status))
            : back()->withErrors(['email' => [__($status)]]);

    }
    public function try_send_email(){
        $email = 'ppti.jeffersontimotius@gmail.com';
        $data = [
            'name' => 'Jefferson Timotius',
            'email' => $email,
            'subject' => 'Test Email',
            'content' => 'This is a test email.'
        ];
        Mail::send('email.test', $data, function($message) use ($data){
            $message->to($data['email'], $data['name'])->subject($data['subject']);
        });
        return 'hehe';
    }


}
