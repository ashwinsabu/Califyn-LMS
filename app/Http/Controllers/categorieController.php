<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorie;
use DB;

class categorieController extends Controller
{
    function getData(){
        $result =categorie::all();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= categorie::find($id);
        return(response()->json(array( "data" => $result)));
    }

    function update(Request $req){
        $depart=categorie::find($req->id);
        $depart->categories=$req->categories;
        $depart->code=$req->code;
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
        $depart=categorie::find($id);
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

    function activityList($id){
        $act=categorie::find($id);
        if($act){
        switch($act->code){
            case 'cat':
                $result = DB::table('cultural_acitivities_participations')
                ->select('id','activity')->get();
                return(response()->json(array( "data" => $result)));
                break;
            case 'ei':
                $result = DB::table('entrepreneurship_innovations')
                ->select('id','activity')->get();
                return(response()->json(array( "data" => $result)));
                break;
            case 'lm':
                $result = DB::table('leadership_managements')
                ->select('id','activity')->get();
                return(response()->json(array( "data" => $result)));
                break;
            case 'ni':
                $result = DB::table('national_initiatives')
                ->select('id','activity')->get();
                return(response()->json(array( "data" => $result)));
                break;
            case 'psi':
                $result = DB::table('professional_self_initiatives')
                ->select('id','activity')->get();
                return(response()->json(array( "data" => $result)));
                break;
            case 'sg':
                $result = DB::table('sports_games')
                ->select('id','activity')->get();
                return(response()->json(array( "data" => $result)));
                break;
        }
    }
    else{
        return['message'=>'Wrong choice'];
    }
    }
}
