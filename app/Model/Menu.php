<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menu";

    protected $guarded = [''];

    public $timestamps = false;

    public function relasi_ke_pesanan()
    {
    	return $this->hasMany("App\Model\Pesanan", "id_menu", "id");
    }

    public function relasi_ke_kategori()
    {
    	return $this->belongsTo("App\Model\Kategori", "id_kategori", "id");
    }
}
