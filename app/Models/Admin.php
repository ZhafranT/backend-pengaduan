<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    public function admin(){
        return $this->belongsTo(ResponPengaduan::class);
        return $this->belongsTo(Berita::class);
        return $this->belongsTo(Uupk::class);
    }
    public function admin2(){
        return $this->hasMany(ResponPengaduan::class);
        return $this->hasMany(Berita::class);
        return $this->hasMany(Uupk::class);
    }
    protected $fillable = [
        'email',
        'name',
        'password',
    ];
}