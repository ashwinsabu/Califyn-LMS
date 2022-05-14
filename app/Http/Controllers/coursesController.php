<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\courses;
use DB;

class coursesController extends Controller
{
    function getData(){
        $result =courses::all();
        return(response()->json(array( "data" => $result)));
    }


    //gets the name of the course when the id is given
    function getData1($id){
        try{
            $successStatus=200;
            $course=DB::table('courses')->where('code', '=', $id)->value('course_name');
            return response()->json(['name'=>$course, 'status'=>$successStatus]);
        }
        catch(\Exception $exception){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }
    function add(Request $req){

        $course=new courses;
        $course->code=$req->code;
        $course->course_name=$req->course_name;
        $course->course_hours=$req->course_hours;
        $result=$course->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        $depart=courses::find($req->id);
        $depart->courses_name=$req->courses_name;
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
        $depart=courses::find($id);
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
