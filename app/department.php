<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    public $table='departments';
    public $timestamps=false;
    protected $fillable = ['department_name'];
}
