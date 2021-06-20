<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    public $table='activitys';
    public $timestamps=false;
    protected $fillable = ['activity','category_id'];

    public $createRules = array(
        'activity' => 'required',
        'category_id' => 'required',
    );
}


