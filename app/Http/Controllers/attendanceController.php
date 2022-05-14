<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attendance;

class attendanceController extends Controller
{
    function add(Request $req){

        $attendance=new attendance;
        $attendance->student_id=$req->student_id;
        $attendance->classroom_id=$req->classroom_id;
        $attendance->date=$req->date;
        $attendance->period=$req->period;
        $attendance->active=$req->active;
        $result=$attendance->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }
}
