<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class adminController extends Controller
{
    public function postlogin(Request $request){
        // dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/pengaduan');
        }
        return redirect('/');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}