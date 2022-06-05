<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailPemesananMenu extends Model
{
    protected $table = "detail_pemesanan_menu";

    protected $guarded = [''];

    public $timestamps = false;

    public function relasi_ke_menu()
    {
    	return $this->belongsTo("App\Model\Menu", "id_menu", "id");
    }
}
