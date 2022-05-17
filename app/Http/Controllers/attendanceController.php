<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attendance;
use App\classroom;
use DB;

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

    function level(Request $req){

        $total=classroom::find($req->classroom_id);
        $level=0;
        $total_present=DB::table('attendances')
                ->where('date',$req->date)
                ->count();
        $percentage=($total_present/$total->total_students)*100;
        if($percentage>80)
            $level=5;
        elseif($percentage>60)
            $level=4;
        elseif($percentage>40)
            $level=3;
        elseif($percentage>20)
            $level=2;
        else
            $level=1;
        return(response()->json(array( "data" => $level)));

        
    }
}
