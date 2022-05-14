<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendance extends Model
{
    public $table='attendances';
    public $timestamps=false;
    protected $fillable = ['student_id','classroom_id','date','active','period'];


    public $createRules = array(
        'student_id' => 'required',
        'classroom_id' => 'required',
        'date' => 'required',
        'active' =>'required',
        'period' =>'required '

    );
}

