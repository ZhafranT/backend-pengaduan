<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable, HasFactory;
    // public function admin(){
    //     return $this->belongsTo(ResponPengaduan::class);
    //     return $this->belongsTo(Berita::class);
    //     return $this->belongsTo(Uupk::class);
    // }
    // public function admin2(){
    //     return $this->hasMany(ResponPengaduan::class);
    //     return $this->hasMany(Berita::class);
    //     return $this->hasMany(Uupk::class);
    // }
    public function berita(){
        return $this->hasMany(Berita::class, 'admin_id');
    }
    public function uupk(){
        return $this->hasMany(Uupk::class, 'admin_id');
    }
    public function responPengaduan(){
        return $this->hasMany(ResponPengaduan::class, 'admin_id');
    }
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}