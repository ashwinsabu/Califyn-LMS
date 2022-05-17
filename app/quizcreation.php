<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quizcreation extends Model
{
    public $table='quizcreation';
    public $timestamps=false;
    protected $fillable = ['name','description','classroom_id','active'];

}

