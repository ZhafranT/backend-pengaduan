<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uupk extends Model
{
    use HasFactory;
    public function uupk(){
        return $this->belongsTo(Admin::class);
    }
    public function uupk2(){
        return $this->hasOne(Admin::class);
    }
    protected $fillable = [
        'admin_id',
        'nomorUU',
        'bab',
        'judulBab',
        'pasal',
        'isi',
    ];
}
