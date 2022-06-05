<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";

    protected $guarded = [''];

    public $timestamps = false;

    public function relasi_ke_menu()
    {
    	return $this->hasMany("App\Model\Menu", "id_kategori", "id");
    }
}
