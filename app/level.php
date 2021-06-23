<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    public $table='levels';
    public $timestamps=false;
    protected $fillable = ['levels','category_id','status'];
}
