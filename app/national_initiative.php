<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class national_initiative extends Model
{
    public $table='national_initiatives';
    public $timestamps=false;
    protected $fillable = ['activity', 'point','max_point','duration'];

}
