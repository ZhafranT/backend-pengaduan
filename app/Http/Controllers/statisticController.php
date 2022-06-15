<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use DB;

class statisticController extends Controller
{
    public function index(){
        
        $total_pengaduan = Pengaduan::select(DB::raw("COUNT(*) as total_pengaduan"))
        ->GroupBy(DB::raw("Month(created_at)"))
        ->pluck('total_pengaduan');

        $bulan = Pengaduan::select(DB::raw("MONTHNAME(created_at) as bulan"))
        ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        ->pluck('bulan');
        
        return view('statistic.statistic', [
            "title" => "Statistik"
        ], compact('total_pengaduan','bulan'));
    }
}
