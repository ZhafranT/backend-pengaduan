<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class statisticController extends Controller
{
    public function index(){
        return view('statistic.statistic', [
            "title" => "Statistik"
        ]);
    }
}
