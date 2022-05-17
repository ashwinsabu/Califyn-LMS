<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quiz extends Model
{
    public $table='quiz';
    public $timestamps=false;
    protected $fillable = ['question','option1','option2','option3','option4','quiz_id','answer'];

}

