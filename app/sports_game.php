<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sports_game extends Model
{
    public $table='sports_games';
    public $timestamps=false;
    protected $fillable = ['activity', 'points', 'level_id','max_points','duration'];
}


