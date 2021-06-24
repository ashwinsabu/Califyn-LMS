<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\point;
use DB;

class pointController extends Controller
{
    function getData(){
        $result =point::all();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= point::find($id);
        return(response()->json(array( "data" => $result)));
    }

    function getData2(Request $req){
        try{
            $result = point::where('activity_id', $req->activity_id)
                            ->where('category_id', $req->category_id)
                            ->where('level_id', $req->level_id)->get();
            
            return(response()->json(array("data" => $result)));
        }
        catch(\Exception $exception){
            return response()->json([
                     'message' => 'failed'], 400);
         }
    }

    function add(Request $req){
        $result = DB::table('points')->where('activity_id', $req->activity_id)->where('category_id', $req->category_id)->where('level_id', $req->level_id)->first();
        if($result){
            return response()->json([
                'message' => 'Already added.'], 400);
        }
        $points=new point;
        $points->activity_id=$req->activity_id;
        $points->level_id=$req->level_id;
        $points->points=$req->points;
        $points->category_id=$req->category_id;
        $points->max_points=$req->max_points;
        $points->duration=$req->duration;
        $result=$points->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        $points=point::find($req->id);
        $points->activity_id=$req->activity_id;
        $points->level_id=$req->level_id;
        $points->points=$req->points;
        $points->category_id=$req->category_id;
        $points->max_points=$req->max_points;
        $points->duration=$req->duration;
        $result=$points->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function delete($id){
        $points=point::find($id);
        if($points==null){
            return["message"=>"No row found"];
        }
        else{
        $result=$points->delete();
        if($result){
            return["Message"=>"Deleted"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }}
    }
}
