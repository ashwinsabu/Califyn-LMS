<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\department;

class departmentController extends Controller
{
    function getData(){
        $result =department::all();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= department::find($id);
        return(response()->json(array( "data" => $result)));
    }
    function add(Request $req){

        $depart=new department;
        $depart->department_name=$req->department_name;
        $result=$depart->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return["Result"=>"Failed"];
        }
    }

    function update(Request $req){
        $depart=department::find($req->id);
        $depart->department_name=$req->department_name;
        $result=$depart->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return["Result"=>"Failed"];
        }
    }

    function delete($id){
        $depart=department::find($id);
        if($depart==null){
            return["message"=>"No row found"];
        }
        else{
        $result=$depart->delete();
        if($result){
            return["Message"=>"Deleted"];
        }
        else{
            return["Messgae"=>"Not deleted"];
        }}
    }
}
