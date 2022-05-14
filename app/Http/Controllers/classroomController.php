<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classroom;
use DB;

class classroomController extends Controller
{
    //gets the name of the classroom when the id is given
    function getData1(Request $req){
        try{
            $successStatus=200;
            //$result= classroom::find($id);
            $users = DB::table('classrooms')->where('staff_id', $req->id)->get();
            return(response()->json(array( "data" => $users)));
        }
        catch(\Exception $exception){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }
    function add(Request $req){

        $classroom=new classroom;
        $classroom->course_id=$req->course_id;
        $classroom->department_id=$req->department_id;
        $classroom->yop=$req->yop;
        $classroom->section=$req->section;
        $classroom->hour=0;
        $classroom->staff_id=$req->staff_id;
        $result=$classroom->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        $depart=classrooms::find($req->id);
        $depart->classrooms_name=$req->classrooms_name;
        $result=$depart->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function delete($id){
        $depart=classrooms::find($id);
        if($depart==null){
            return["message"=>"No row found"];
        }
        else{
        $result=$depart->delete();
        if($result){
            return["Message"=>"Deleted"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }}
    }
}
