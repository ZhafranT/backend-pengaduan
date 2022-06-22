<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class statisticController extends Controller
{
    public function index(){
        
        // $pengaduanData = Pengaduan::select(DB::raw("COUNT(*) as count"))
        // ->whereYear("created_at",date('Y'))
        // ->GroupBy(DB::raw("Month(created_at)"))
        // ->pluck('count');

        // $bulan = Pengaduan::select(DB::raw("MONTHNAME(created_at) as bulan"))
        // ->GroupBy(DB::raw("MONTHNAME(created_at)"))
        // ->pluck('bulan');

        $data = Pengaduan::select('id','created_at')->get()->groupBy(function($data) {
            return Carbon::parse($data->created_at)->format('M');
        });

        foreach($data as $month => $values) {
            $months[]=$month;
            $monthCount[]=count($values);
        }
        
        return view('statistic.statistic', [
            "title" => "Statistik",
            'data'=>$data,'months'=>$months,'monthCount'=>$monthCount
        ]);
    }
}
