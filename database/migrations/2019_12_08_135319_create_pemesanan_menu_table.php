<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesananMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_pesan')->nullable();
            $table->string('nama_pembeli')->nullable();
            $table->integer('id_meja')->nullable();
            $table->string('koder_order')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('status_order')->nullable();
            $table->integer('id_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan_menu');
    }
}
