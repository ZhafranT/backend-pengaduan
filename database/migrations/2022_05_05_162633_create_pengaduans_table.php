<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreign('user_id')
              ->references('id')->on('users')->onDelete('cascade');
            $table->string('nama');
            $table->string('jenisKelamin');
            $table->date('tanggalLahir');
            $table->string('noIdentitas');
            $table->string('telepon');
            $table->string('email');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kotaKabupaten');
            $table->string('kodePos');
            $table->string('alamatTempatBarangJasa');
            $table->string('teleponPelakuUsaha');
            $table->string('provinsiPelakuUsaha');
            $table->string('kotaKabupatenPelakuUsaha');
            $table->string('kodePosPelakuUsaha');
            $table->string('jenisProduk');
            $table->string('detailProduk');
            $table->string('merkDagang');
            $table->string('type');
            $table->string('jenisPengaduan');
            $table->datetime('waktuKejadianDitemukan');
            $table->string('tempatLokasiKejadian');
            $table->string('saksi');
            $table->string('kerugianMaterial');
            $table->string('kerugianFisik');
            $table->string('kerugianPsikis');
            $table->string('jenisTuntutan');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE pengaduans ADD buktiPembelian MEDIUMBLOB");
        DB::statement("ALTER TABLE pengaduans ADD kronologisPengaduan BLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduans');
    }
};
