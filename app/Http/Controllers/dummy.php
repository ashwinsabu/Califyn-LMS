<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummy extends Controller
{
    function getData(){
        return['name'=>'Ashwin'];
    }
}
