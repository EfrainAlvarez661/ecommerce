<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brandg';
    protected $fillable = ['name'];
    public $timestamps = true
   
}
