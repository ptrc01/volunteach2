<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        return view('SignUp');
    }

    public function doRegis(Request $request){
        $validated = $request->validate([
            'name'=>'required|max:25',
            'email'=>'required|email|unique:clients',
            'password'=>'required|min:10|confirmed',
            'password_confirmation' => 'required|min:10'
        ]);

        $role = (strpos($request->email, '@admin') == true) ? 'admin' : 'client';

        Client::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$role
        ]);

        return redirect()->route('login');
    }

    public function login(){
        return view('SignIn');
    }

    public function doLogin(Request $request){
        $validated = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $credential = $request->only('email','password');

        if(Auth::attempt($credential)){
            if (strpos($request->email, '@admin') == true) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('client.index');
            }
        }

        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
