<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platillo_Orden extends Model
{
    use HasFactory;

    protected $guarded = ['id','_token'];
    protected $table = "platillo_orden";

    public $timestamps = false;
}
