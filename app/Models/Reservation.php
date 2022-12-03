<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    //protected $fillable= ['nombre', 'correo', 'telefono', 'personas','fecha', 'hora'];
    protected $guarded = ['id','_token'];
    protected $table = "reservations";

    public $timestamps = false;
}
