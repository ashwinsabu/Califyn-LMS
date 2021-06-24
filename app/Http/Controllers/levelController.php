<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\level;
use DB;
use App\activity;

class levelController extends Controller
{
    function getDataAll($id){
        //change
        try{
        $result= level::where('activity_id',$id)->where('status',1)->get();
        if($result){
            return(response()->json(array( "data" => $result)));
        }
        else{
            return response()->json([
                'message' => 'No level'], 400);
            }
        }

        catch(\Exception $exception){
        return response()->json([
                    'message' => 'failed'], 400);
        }
    }

    function getData($id){
        //change
        try{
            $result=level::where('activity_id',$id)->get();
            if($result){
                return(response()->json(array( "data" => $result)));
            }
        }

        catch(\Exception $exception){
        return response()->json([
                    'message' => 'failed'], 400);
        }
    }

    // function getData(){
    //     $result= level::all();
    //     return(response()->json(array( "data" => $result)));
    // }
    function add(Request $req){

        $level=new level;
        $level->levels=$req->levels;
        $level->activity_id=$req->activity_id;
        $level->status=1;
        $result=$level->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        $level=level::find($req->id);
        $level->levels=$req->levels;
        $level->status=$req->status;
        $result=$level->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function delete($id){
        $level=level::find($id);
        if($level==null){
            return["message"=>"No row found"];
        }
        else{
        $result=$level->delete();
        if($result){
            return["Message"=>"Deleted"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }}
    }
}
