<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    //protected $fillable= ['nombre', 'correo', 'telefono', 'personas','fecha', 'hora'];
    protected $guarded = ['id','_token'];

    public $timestamps = false;
}
