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
        Schema::create('respon_pengaduans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->foreign('admin_id')
              ->references('id')->on('admins')->onDelete('cascade');
            $table->foreignId('pengaduan_id');
            $table->foreign('pengaduan_id')
              ->references('id')->on('pengaduans')->onDelete('cascade');
            $table->string('status');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respon_pengaduans');
    }
};
