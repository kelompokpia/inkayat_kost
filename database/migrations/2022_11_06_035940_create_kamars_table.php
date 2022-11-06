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
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kamar');
            $table->string('slug');
            $table->string('nama_penghuni');
            $table->int('nik_penghuni');
            $table->int('telepon_penghuni');
            $table->date('tanggal_masuk');
            $table->string('status_kamar');
            $table->int('harga_kamar');
            $table->text('deskripsi_kamar');
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
        Schema::dropIfExists('kamars');
    }
};