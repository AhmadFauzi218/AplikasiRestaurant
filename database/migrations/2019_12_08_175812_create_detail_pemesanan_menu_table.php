<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPemesananMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemesanan_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_order')->nullable();
            $table->integer('id_masakan')->nullable();
            $table->integer('jumlah_beli')->nullable();
            $table->integer('status_pesanan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pemesanan_menu');
    }
}
