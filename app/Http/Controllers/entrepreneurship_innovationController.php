<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\entrepreneurship_innovation;

class entrepreneurship_innovationController extends Controller
{
    function getData(){
        $result =entrepreneurship_innovation::all();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= entrepreneurship_innovation::find($id);
        return(response()->json(array( "data" => $result)));
    }
    function add(Request $req){
        $ni=new entrepreneurship_innovation;
        $ni->activity=$req->activity;
        $ni->points=$req->points;
        $ni->max_points=$req->max_points;
        $ni->duration=$req->duration;
        $result=$ni->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        $ni=entrepreneurship_innovation::find($req->id);
        $ni->activity=$req->activity;
        $ni->points=$req->points;
        $ni->max_points=$req->max_points;
        $ni->duration=$req->duration;
        $result=$ni->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function delete($id){
        $ni=entrepreneurship_innovation::find($id);
        if($ni==null){
            return["message"=>"No row found"];
        }
        else{
        $result=$ni->delete();
        if($result){
            return["Message"=>"Deleted"];
        }
        else{
            return["Messgae"=>"Not deleted"];
        }}
    }
}
