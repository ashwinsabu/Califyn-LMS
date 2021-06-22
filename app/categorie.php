<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    public $table='categories';
    public $timestamps=false;
    protected $fillable = ['categories','status'];
}
