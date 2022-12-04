<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mesa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id','_token'];
    protected $table = "mesa";

    public $timestamps = false;
}
  