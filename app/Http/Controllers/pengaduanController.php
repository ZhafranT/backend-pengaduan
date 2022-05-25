<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengaduanController extends Controller
{
    public function indexUnresolved()
    {
        return view('Pengaduan.pengaduanunresolved', [
            "title" => "Pengaduan Unresolved"
        ]);
    }

    public function indexOnprocess()
    {
        return view('Pengaduan.pengaduanprocess', [
            "title" => "Pengaduan Process"
        ]);
    }

    public function indexMediasi()
    {
        return view('Pengaduan.pengaduanmediasi', [
            "title" => "Pengaduan Mediasi"
        ]);
    }

    public function indexDone()
    {
        return view('Pengaduan.pengaduandone', [
            "title" => "Pengaduan Done"
        ]);
    }
}
