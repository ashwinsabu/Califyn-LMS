<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class professional_self_initiative extends Model
{
    public $table='professional_self_initiatives';
    public $timestamps=false;
    protected $fillable = ['activity', 'points', 'level_id','max_points','duration'];

}
