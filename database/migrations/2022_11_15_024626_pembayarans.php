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
            $table->id()->unique();
            $table->integer('tahun');
            $table->foreignId('id_kamar');
            $table->string('jan')->nullable();
            $table->string('feb')->nullable();
            $table->string('mar')->nullable();
            $table->string('apr')->nullable();
            $table->string('mei')->nullable();
            $table->string('jun')->nullable();
            $table->string('jul')->nullable();
            $table->string('ags')->nullable();
            $table->string('sep')->nullable();
            $table->string('okt')->nullable();
            $table->string('nov')->nullable();
            $table->string('des')->nullable();
            $table->unique(array('tahun', 'id_kamar'));
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
        Schema::dropIfExists('pembayarans');
    }
};