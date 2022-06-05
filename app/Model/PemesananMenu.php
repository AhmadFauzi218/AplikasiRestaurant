<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PemesananMenu extends Model
{
    protected $table = "pemesanan_menu";

    protected $guarded = [''];

    public $timestamps = false;

    public function relasi_ke_meja()
    {
    	return $this->belongsTo("App\Model\Meja", "id_meja", "id");
    }

    public function relasi_ke_transaksi()
    {
    	return $this->hasMany("App\Model\Transaksi", "id_pemesanan_menu", "id");
    }
}
