<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";

    protected $guarded = [''];

    public $timestamps = false;

    public function relasi_ke_meja()
    {
    	return $this->belongsTo("App\Model\Meja", "id_meja", "id");
    }

    public function relasi_ke_pemesanan_menu()
    {
    	return $this->belongsTo("App\Model\PemesananMenu", "id_pemesanan_menu", "id");
    }
}
