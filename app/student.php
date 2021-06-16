<?php

namespace App;
use App\staff;
use App\department;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    public $table='students';
    public $timestamps=false;
    protected $fillable = ['name', 'register_no', 'password', 'department_id','yop','email','semester','section','staff_id','points'];
    protected $hidden=array('password');

    public function staffRelation() {
        return $this->hasOne( staff::class,'id', 'staff_id');
    }
    public function departmentRelation(){
        return $this->hasOne( department::class,'id', 'department_id');
    }

    public $createRules = array(
        'register_no' => 'required|unique:App\student,register_no',
        'name' => 'required',
        'email' => 'required|email|unique:App\student,email',
        'password' => 'required',
        'yop' => 'required',
        'department_id' => 'required',
        'semester' => 'required',
    );

    

}




