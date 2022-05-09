<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Admin extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;
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
        'firstName',
        'lastName',
        'alamat',
        'noTelp',
        'gender',
        'password',
        'token',
    ];
    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
}
