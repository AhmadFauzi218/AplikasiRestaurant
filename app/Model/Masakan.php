<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Masakan extends Model
{
    protected $table = "masakan";

    protected $guarded = [''];

    public $timestamps = false;

    public function rs_data_makanan()
    {
    	return $this->hasMany("App\Model\DetailOrder", "id_masakan", "id");
    }
}
