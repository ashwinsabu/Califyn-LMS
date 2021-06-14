<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sports_game;

class sports_gameController extends Controller
{
    function getData(){
        $result =sports_game::all();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= sports_game::find($id);
        return(response()->json(array( "data" => $result)));
    }

    function add(Request $req){
        $sport=new sports_game;
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
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        $sport=sports_game::find($req->id);
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
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function delete($id){
        $sport=sports_game::find($id);
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
