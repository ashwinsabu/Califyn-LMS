<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cultural_acitivities_participation;

class cultural_acitivities_participationsController extends Controller
{
    function getData(){
        $result =cultural_acitivities_participation::all();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= cultural_acitivities_participation::find($id);
        return(response()->json(array( "data" => $result)));
    }

    function add(Request $req){
        $sport=new cultural_acitivities_participation;
        $sport->activity=$req->activity;
        $sport->duration=$req->duration;
        $sport->points=$req->points;
        $sport->level_id=$req->level_id;
        $sport->max_points=$req->max_points;
        $result=$sport->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return["Result"=>"Failed"];
        }
    }

    function update(Request $req){
        $sport=cultural_acitivities_participation::find($req->id);
        $sport->activity=$req->activity;
        $sport->duration=$req->duration;
        $sport->points=$req->points;
        $sport->level_id=$req->level_id;
        $sport->max_points=$req->max_points;
        $result=$sport->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return["Result"=>"Failed"];
        }
    }

    function delete($id){
        $sport=cultural_acitivities_participation::find($id);
        if($sport==null){
            return["message"=>"No row found"];
        }
        else{
        $result=$sport->delete();
        if($result){
            return["Message"=>"Deleted"];
        }
        else{
            return["Messgae"=>"Not deleted"];
        }}
    }

}
