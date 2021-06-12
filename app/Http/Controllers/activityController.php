<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\activity;
use DB;

class activityController extends Controller
{
    function getData(Request $req){

        $result = DB::table('activitys')
                                ->select('id','activity','category_id')
                                ->where('category_id',$req->category_id)->get();
        return(response()->json(array( "data" => $result)));

    }
}
