<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    public function berita(){
        return $this->belongsTo(Admin::class);
    }
    public function berita2(){
        return $this->hasOne(Admin::class);
    }
    protected $fillable = [
        'admin_id',
        'judulBerita',
        'isiBerita',
    ];
}
