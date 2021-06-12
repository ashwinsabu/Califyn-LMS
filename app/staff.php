<?php

namespace App;
use App\department;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    public $table='staffs';
    public $timestamps=false;
    protected $fillable = ['name','password','designation', 'department_id','email','yop','section','role'];
    protected $hidden=array('password');

    public function departmentRelation(){
        return $this->hasOne( department::class,'id', 'department_id');
    }

    public $createRules = array(
        'designation' => 'required',
        'name' => 'required',
        'email' => 'required|unique:App\staff,email',
        'password' => 'required',
        'yop' => 'required',
        'department_id' => 'required',
        'section' => 'required',
    );
}

