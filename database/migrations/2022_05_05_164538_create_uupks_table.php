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
        Schema::create('uupks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->foreign('admin_id')
              ->references('id')->on('admins');
            $table->string('nomorUU');
            $table->string('bab');
            $table->string('judulBab');
            $table->string('pasal');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE uupks ADD isi BLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uupks');
    }
};
