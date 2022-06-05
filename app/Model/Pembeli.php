<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = "pembeli";

    protected $guarded = [''];

    public $timestamps = false;
}
