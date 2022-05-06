<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponPengaduan extends Model
{
    use HasFactory;
    public function reponpengaduan(){
        return $this->belongsTo(Pengaduan::class);
    }
    public function responpengaduan2(){
        return $this->hasOne(Pengaduan::class);
    }
    protected $fillable = [
        'admin_id',
        'pengaduan_id',
        'status',
        'keterangan',
    ];
}