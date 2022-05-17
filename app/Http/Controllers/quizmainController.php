<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quizcreation;
use DB;

class quizmainController extends Controller
{
    //gets the name of the quiz when the id is given
    // function getData1(Request $req){
    //     try{
    //         $successStatus=200;
    //         //$result= quiz::find($id);
    //         $users = DB::table('quizs')->where('staff_id', $req->id)->get();
    //         return(response()->json(array( "data" => $users)));
    //     }
    //     catch(\Exception $exception){
    //         return response()->json([
    //             'message' => 'failed'], 400);
    //     }
    // }
    function add(Request $req){

        $quiz=new quizcreation;
        $quiz->name='Unknown';
        $quiz->name=$req->name;
        $quiz->description=$req->description;
        $quiz->classroom_id=$req->classroom_id;
        $quiz->active=1;
        $result=$quiz->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    // function update(Request $req){
    //     $depart=quizs::find($req->id);
    //     $depart->quizs_name=$req->quizs_name;
    //     $result=$depart->save();
    //     if($result){
    //         return["Message"=>"Success"];
    //     }
    //     else{
    //         return response()->json([
    //             'message' => 'failed'], 400);
    //     }
    // }

    // function delete($id){
    //     $depart=quizs::find($id);
    //     if($depart==null){
    //         return["message"=>"No row found"];
    //     }
    //     else{
    //     $result=$depart->delete();
    //     if($result){
    //         return["Message"=>"Deleted"];
    //     }
    //     else{
    //         return response()->json([
    //             'message' => 'failed'], 400);
    //     }}
    // }
}
