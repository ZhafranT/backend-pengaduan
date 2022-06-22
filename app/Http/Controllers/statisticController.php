<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use DB;

class statisticController extends Controller
{
    public function index(){
        
        $pengaduanData = Pengaduan::select(DB::raw("COUNT(*) as count"))
        ->whereYear("created_at",date('Y'))
        ->GroupBy(DB::raw("Month(created_at)"))
        ->pluck('count');

        $bulan = Pengaduan::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');
        
        return view('statistic.statistic', [
            "title" => "Statistik"
        ], compact('pengaduanData','bulan'));
    }
}
