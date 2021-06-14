<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\national_initiative;

class national_initiativeController extends Controller
{
    function getData(){
        $result =national_initiative::all();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= national_initiative::find($id);
        return(response()->json(array( "data" => $result)));
    }
    function add(Request $req){

        $ni=new national_initiative;
        $ni->activity=$req->activity;
        $ni->point=$req->point;
        $ni->max_point=$req->max_point;
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
        $ni=national_initiative::find($req->id);
        $ni->activity=$req->activity;
        $ni->point=$req->point;
        $ni->max_point=$req->max_point;
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
        $ni=national_initiative::find($id);
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
