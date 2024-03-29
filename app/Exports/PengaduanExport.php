<?php

namespace App\Exports;

use App\Models\ResponPengaduan;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PengaduanExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('Pengaduan.Export.unresolvedexcel', [
            'dtUnr' => ResponPengaduan::with('pengaduan')->where('statusPengaduan', '=', 'unresolved')->get()
        ]);
    }
}
