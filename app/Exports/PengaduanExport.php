<?php

namespace App\Exports;

use App\Models\Pengaduan;
use App\Models\ResponPengaduan;
use Maatwebsite\Excel\Concerns\FromCollection;

class PengaduanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pengaduan::all();
    }
}
