<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    protected $table = "detail_order";

    protected $guarded = [''];

    public $timestamps = false;

    public function rs_masakan()
    {
    	return $this->belongsTo("App\Model\Masakan", "id_masakan", "id");
    }
}
