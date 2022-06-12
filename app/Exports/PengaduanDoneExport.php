<?php

namespace App\Exports;

use App\Models\ResponPengaduan;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PengaduanDoneExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('Pengaduan.Export.doneexcel', [
            'dtDone' => ResponPengaduan::with('pengaduan')->where('statusPengaduan', '=', 'done')->get()
        ]);
    }
}