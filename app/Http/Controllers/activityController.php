<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\activity;
use DB;
use Validator;

class activityController extends Controller
{
    function getData(Request $req){

        $result = DB::table('activitys')
                                ->select('id','activity','category_id')
                                ->where('category_id',$req->category_id)->get();
        return(response()->json(array( "data" => $result)));

    }

    function add(Request $req){
        $activity=new activity;
        $val = Validator::make($req->all(),$activity->createRules);

        if ($val->fails()) {
            return response()->json($val->errors(),422);
        }

        $activity->activity=$req->activity;
        $activity->category_id=$req->category_id;
        if($activity->save()){
            return["message"=>"Success"];
        }
        else{
            return response()->json(["message"=>"Could not process the request"],400);
        }
    }
}
