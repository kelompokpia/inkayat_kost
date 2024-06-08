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
        Schema::create('pemasukan', function (Blueprint $table) {
            $table->integer('id')->unique()->autoIncrement();
            $table->string('jenis', 50);
            $table->year('tahun');
            $table->tinyInteger('bulan');
            $table->integer('pengekost');
            $table->bigInteger('nominal');
            $table->date('tgl_bayar');
            $table->text('catatan');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
};
