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
            $table->integer('id')->unique()->autoIncrement();
            $table->string('nama_kamar');
            $table->string('gambar_kamar')->nullable();
            $table->string('nama_penghuni');
            $table->string('alamat');
            $table->bigInteger('nik_penghuni')->unique();
            $table->bigInteger('telepon_penghuni')->unique();
            $table->date('tanggal_masuk')->nullable();
            $table->string('status_kamar')->nullable();
            $table->integer('harga_kamar')->nullable();
            $table->text('deskripsi_kamar')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
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