<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class statisticController extends Controller
{
    public function index(){

        $data = Pengaduan::select('id','created_at')->orderBy('created_at', 'asc')->get()->groupBy(function($data) {
            return Carbon::parse($data->created_at)->format('M');
        });

        foreach($data as $month => $values) {
            $months[]=$month;
            $monthCount[]=count($values);
        }
        
        return view('statistic.statistic', [
            "title" => "Statistik",
            'data'=>$data,
            'months'=>$months,
            'monthCount'=>$monthCount
        ]);
    }
}
