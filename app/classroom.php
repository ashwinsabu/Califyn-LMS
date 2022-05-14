<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    public $table='classrooms';
    public $timestamps=false;
    protected $fillable = ['course_id','department_id','yop','section','staff_id','hour'];


    public $createRules = array(
        'course_id' => 'required',
        'department_id' => 'required',
        'yop' => 'required',
        'section' =>'required',
        'staff_id' => 'required'

    );
}

