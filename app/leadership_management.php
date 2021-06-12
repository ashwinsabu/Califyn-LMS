<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leadership_management extends Model
{
    public $table='leadership_managements';
    public $timestamps=false;
    protected $fillable = ['activity', 'points', 'level_id','max_points','duration'];

}
