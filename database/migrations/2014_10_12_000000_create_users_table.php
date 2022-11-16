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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kamar')->unique();
            $table->string('gambar_kamar');
            $table->string('nama_penghuni');
            $table->integer('nik_penghuni');
            $table->bigInteger('telepon_penghuni');
            $table->date('tanggal_masuk');
            $table->text('deskripsi_kamar');
            $table->string('status_kamar');
            $table->integer('harga_kamar');
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
        Schema::dropIfExists('users');
    }
};