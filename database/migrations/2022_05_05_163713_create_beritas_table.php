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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->foreign('admin_id')
              ->references('id')->on('admins');
            $table->string('judulBerita');
            $table->string('image')->nullable();
            $table->timestamps();
        });
        // DB::statement("ALTER TABLE beritas ADD photo MEDIUMBLOB");
        DB::statement("ALTER TABLE beritas ADD isiBerita BLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beritas');
    }
};
