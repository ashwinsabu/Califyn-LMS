<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entrepreneurship_innovation extends Model
{
    public $table='entrepreneurship_innovations';
    public $timestamps=false;
    protected $fillable = ['activity', 'points', 'level_id','max_points','duration'];
}
