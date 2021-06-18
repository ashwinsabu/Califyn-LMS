<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\professional_self_initiative;

class professional_self_initiativesController extends Controller
{
    function getData(){
        $result =professional_self_initiative::all();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= professional_self_initiative::find($id);
        return(response()->json(array( "data" => $result)));
    }
    function add(Request $req){
        $psi=new professional_self_initiative;
        $psi->activity=$req->activity;
        $psi->points=$req->points;
        $psi->duration=$req->duration;
        $psi->level_id=$req->level_id;
        $psi->max_points=$req->max_points;
        $result=$psi->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        $psi=professional_self_initiative::find($req->id);
        $psi->activity=$req->activity;
        $psi->points=$req->points;
        $psi->duration=$req->duration;
        $psi->level_id=$req->level_id;
        $psi->max_points=$req->max_points;
        $result=$psi->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function delete($id){
        $psi=professional_self_initiative::find($id);
        if($psi==null){
            return["message"=>"No row found"];
        }
        else{
        $result=$psi->delete();
        if($result){
            return["Message"=>"Deleted"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }}
    }
}
