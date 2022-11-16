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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->foreignId('id_kamar');
            $table->string('jan');
            $table->string('feb');
            $table->string('mar');
            $table->string('apr');
            $table->string('mei');
            $table->string('jun');
            $table->string('jul');
            $table->string('ags');
            $table->string('sep');
            $table->string('okt');
            $table->string('nov');
            $table->string('des');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};