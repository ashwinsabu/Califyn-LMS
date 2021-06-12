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
    protected $fillable = ['name', 'image', 'student_id', 'prize','organized_by','level','day','points','category_id','status','level_id','about'];

    public function studentRelation() {
        return $this->hasOne( student::class,'id', 'student_id');
    }
    public function categoryRelation(){
        return $this->hasOne( categorie::class,'id', 'category_id');
    }

    public function levelRelation(){
        return $this->hasOne( department::class,'id', 'level_id');
    }
}

