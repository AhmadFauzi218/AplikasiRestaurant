<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Meja extends Model
{
    protected $table = "meja";

    protected $guarded = [''];

    public $timestamps = false;

    public function relasi_ke_pemesanan_menu()
    {
    	return $this->belongsTo("App\Model\PemesananMenu", "id_meja", "id");
    }

    public function relasi_ke_transaksi()
    {
    	return $this->hasMany("App\Model\Transaksi", "id_meja", "id");
    }
}
