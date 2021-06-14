<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\leadership_management;

class leadership_managementsController extends Controller
{
    function getData(){
        $result =leadership_management::all();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= leadership_management::find($id);
        return(response()->json(array( "data" => $result)));
    }
    function add(Request $req){

        'activity', 'points', 'level_id','max_points','duration'
        $lm=new leadership_management;
        $lm->activity=$req->activity;
        $lm->points=$req->points;
        $lm->level_id=$req->level_id;
        $lm->duration=$req->duration;
        $lm->max_points=$req->max_points;
        $result=$lm->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        $lm=leadership_management::find($req->id);
        $lm->activity=$req->activity;
        $lm->points=$req->points;
        $lm->level_id=$req->level_id;
        $lm->duration=$req->duration;
        $lm->max_points=$req->max_points;
        $result=$lm->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function delete($id){
        $lm=leadership_management::find($id);
        if($lm==null){
            return["message"=>"No row found"];
        }
        else{
        $result=$lm->delete();
        if($result){
            return["Message"=>"Deleted"];
        }
        else{
            return["Messgae"=>"Not deleted"];
        }}
    }
}
