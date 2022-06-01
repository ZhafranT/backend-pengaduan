<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponPengaduan extends Model
{
    use HasFactory;
    // public function reponpengaduan(){
    //     return $this->belongsTo(Pengaduan::class);
    //     return $this->belongsTo(Admin::class);
    // }
    // public function responpengaduan2(){
    //     return $this->hasOne(Pengaduan::class);
    //     return $this->hasOne(Admin::class);
    // }
    public function pengaduan(){
        return $this->belongsTo(Pengaduan::class, 'pengaduan_id');
    }
    public function admin(){
        return $this->belongsTo(Admin::class, 'admin_id');
    }
    protected $fillable = [
        'admin_id',
        'pengaduan_id',
        'statusPengaduan',
        'tanggalMediasi',
        'tempatMediasi',
        'reportMediasi',
    ];
}