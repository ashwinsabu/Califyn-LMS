<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\activity;
use DB;
use Validator;

class activityController extends Controller
{
    function activityList($id){

        $act=activity::where('category_id',$id)->where('status',1)->get();
        if($act){
            return(response()->json(array( "data" => $act)));
    }
    else{
        return response()->json(["message"=>"Request failed as wrong input"],400);
    }

    }

    function getDataAll(Request $req){

        $act=activity::where('category_id',$id)->get();
        if($act){
            return(response()->json(array( "data" => $act)));
    }
    else{
        return response()->json(["message"=>"Request failed as wrong input"],400);
    }

    }

    function add(Request $req){
        $activity=new activity;
        $val = Validator::make($req->all(),$activity->createRules);

        if ($val->fails()) {
            return response()->json($val->errors(),422);
        }

        $activity->activity=$req->activity;
        $activity->category_id=$req->category_id;
        $activity->status=1;
        if($activity->save()){
            return["message"=>"Success"];
        }
        else{
            return response()->json(["message"=>"Could not process the request"],400);
        }
    }

    function update(Request $req){
        $activity=activity::find($req->id);
        $activity->activity=$req->activity;
        $activity->category_id=$req->category_id;
        $activity->status=$req->status;
        $result=$activity->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    // function activityList($id){
    //     $act=activity::where('category_id',$id)->get();
    //     if($act){
    //         return(response()->json(array( "data" => $act)));
    // }
    // else{
    //     return response()->json(["message"=>"Request failed as wrong input"],400);
    // }
    // }
}
