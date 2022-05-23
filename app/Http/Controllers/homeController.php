<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

class homeController extends Controller
{
    public function index()
    {
        $dtHome = Admin::all();
        return view('Pengaduan.pengaduan', compact('dtHome'));
    }
}
