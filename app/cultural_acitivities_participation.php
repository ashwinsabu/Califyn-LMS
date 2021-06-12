<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cultural_acitivities_participation extends Model
{
    public $table='cultural_acitivities_participations';
    public $timestamps=false;
    protected $fillable = ['activity', 'points', 'level_id','max_points','duration'];
}
