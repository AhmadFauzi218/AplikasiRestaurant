<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    protected $guarded = [''];

    public $timestamps = false;

    public function rs_meja()
    {
    	return $this->belongsTo("App\Model\Meja", "id_meja", "id");
    }
}
