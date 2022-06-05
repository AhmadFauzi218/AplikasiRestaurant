<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookingMeja extends Model
{
    protected $table = "booking_meja";

    protected $guarded = [''];

    public $timestamps = false;

    public function rs_booking()
    {
    	return $this->belongsTo("App\Model\Meja", "id_meja", "id");
    }
}
