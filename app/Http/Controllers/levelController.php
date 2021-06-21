<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\level;
use DB;
use App\categorie;
use App\activity;

class levelController extends Controller
{
    function getData1(Request $req){
        //change
        try{
        $result= categorie::find($req->category_id);
        $result1= activity::find($req->activity_id);
        if($result->code=='lm'){
            $result = DB::table('levels')
                    ->select('id','levels','category_id')
                    ->where('category_id',$result->id)->get();
        }
        elseif($result->code=='ei'){
            $result = DB::table('levels')
                    ->select('id','levels','category_id')
                    ->where('category_id',$result->id)->get();
        }
        elseif($result->code=='psi'){
            if($result1->id==22 || $result1->id == 24){
                $result = DB::table('levels')
                    ->select('id','levels','category_id')
                    ->where('category_id',1)->get();
            }
            else{
                $result = DB::table('levels')
                    ->select('id','levels','category_id')
                    ->where('category_id',2)->get();
            }
        }
        else{
            $result = DB::table('levels')
                ->select('id','levels','category_id')
                ->where('category_id',1)->get();
        }
        return(response()->json(array( "data" => $result)));
    }
    catch(\Exception $exception){
       return response()->json([
                'message' => 'failed'], 400);
    }
    }

    function getData(){
        $result= level::all();
        return(response()->json(array( "data" => $result)));
    }
    function add(Request $req){

        $level=new level;
        $level->levels=$req->levels;
        $level->category_id=$req->category_id;
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
