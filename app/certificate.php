<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\student;
use App\categorie;
use App\level;
use App\staff;
class certificate extends Model
{
    public $table='certificates';
    public $timestamps=false;
    protected $fillable = ['name', 'image', 'student_id', 'prize','organized_by','level_id','day','points','category_id','status','about','activity_id'];

    public function studentRelation() {
        return $this->hasOne( student::class,'id', 'student_id');
    }
    public function categoryRelation(){
        return $this->hasOne( categorie::class,'id', 'category_id');
    }

    public function levelRelation(){
        return $this->hasOne( level::class,'id', 'level_id');
    }

    public $createRules = array(
        'student_id' => 'required',
        'level_id' => 'required',
        'category_id' => 'required',
        'activity_id' => 'required'
    );
}

