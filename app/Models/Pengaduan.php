<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
        // return $this->belongsTo(ResponPengaduan::class);
    }
    // public function pengaduan2(){
    //     return $this->hasOne(User::class);
    //     return $this->hasOne(ResponPengaduan::class);
    // }
    public function responPengaduan(){
        return $this->hasOne(ResponPengaduan::class, 'pengaduan_id');
    }
    protected $fillable = [
        'user_id',
        'nama',
        'jenisKelamin',
        'tanggalLahir',
        'noIdentitas',
        'telepon',
        'email',
        'alamat',
        'provinsi',
        'kotaKabupaten',
        'kodePos',
        'alamatTempatBarangJasa',
        'teleponPelakuUsaha',
        'provinsiPelakuUsaha',
        'kotaKabupatenPelakuUsaha',
        'kodePosPelakuUsaha',
        'jenisProduk',
        'detailProduk',
        'merkDagang',
        'type',
        'jenisPengaduan',
        'waktuKejadianDitemukan',
        'tempatLokasiKejadian',
        'buktiPembelian',
        'saksi',
        'kerugianMaterial',
        'kerugianFisik',
        'kerugianPsikis',
        'jenisTuntutan',
        'kronologisPengaduan',
    ];
}
