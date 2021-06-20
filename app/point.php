<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class point extends Model
{
    public $table='points';
    public $timestamps=false;
    protected $fillable = ['activity_id','points','level_id','category_id','max_points','duration'];

    public $createRules = array(
        'activity_id' => 'required',
        'points' => 'required',
        'level_id' => 'required',
        'category_id' => 'required',
        'max_points' => 'required',
        'duration' => 'required',
    );
}
