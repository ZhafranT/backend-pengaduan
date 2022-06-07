<?php

namespace App\Imports;

use App\Models\Pengaduan;
use Maatwebsite\Excel\Concerns\ToModel;

class PengaduanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pengaduan([
            //
        ]);
    }
}
