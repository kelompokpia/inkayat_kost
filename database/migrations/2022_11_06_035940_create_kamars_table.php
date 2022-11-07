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
        // Schema::create('kamars', function (Blueprint $table) {
        //     $table->string('nama_kamar');
        //     $table->string('slug');
        //     $table->string('nama_penghuni');
        //     $table->integer('nik_penghuni');
        //     $table->unique('nik_penghuni');
        //     $table->integer('telepon_penghuni');
        //     $table->date('tanggal_masuk');
        //     $table->string('status_kamar');
        //     $table->integer('harga_kamar');
        //     $table->text('deskripsi_kamar');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamars');
    }
};