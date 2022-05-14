<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    public $table='courses';
    public $timestamps=false;
    protected $fillable = ['code','course_name','course_hours'];


    public $createRules = array(
        'code' => 'required',
        'course_name' => 'required',
    );
}

