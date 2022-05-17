<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quiz;
use DB;

class quizController extends Controller
{
    function add(Request $req){

        $quiz=new quiz;
        $quiz->question=$req->question;
        $quiz->option1=$req->option1;
        $quiz->option2=$req->option2;
        $quiz->option3=$req->option3;
        $quiz->option4=$req->option4;
        $quiz->quiz_id=$req->quiz_id;
        $quiz->answer=$req->quiz_id;
        $result=$quiz->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }
}
