<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    protected $guarded = ['id','_token'];
    protected $table = "mesa";

    public $timestamps = false;
}
