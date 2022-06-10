<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index(){
        // return view('Admin.login');
        if (Auth::check()) {
            return redirect('pengaduanunresolved');
        }else{
            return view('Admin.login');
        }
    }

    public function authenticate(Request $request){
        // dd($request->all());
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        // $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/pengaduanunresolved');
        }
        return back()->with('loginError', 'Email atau password yang anda masukan salah');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}