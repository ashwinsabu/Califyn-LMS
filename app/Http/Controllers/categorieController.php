<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorie;
use DB;

class categorieController extends Controller
{
    function getData(){
        $result =categorie::where('status',1)->get();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= categorie::find($id);
        return(response()->json(array( "data" => $result)));
    }

    function getData2(){
        $result =categorie::all();
        return(response()->json(array( "data" => $result)));
    }

    function add(Request $req){
        $depart=new categorie;
        $depart->categories=$req->categories;
        $depart->status=1;
        $result=$depart->save();
        if($result){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        $depart=categorie::find($req->id);
        $depart->categories=$req->categories;
        $depart->status=$req->status;
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
        try{
        $depart=categorie::find($id);
        if($depart==null){
            return response()->json([
                'message' => 'No row found'], 400);
        }
        else{
        $result=$depart->delete();
        if($result){
            return["Message"=>"Deleted"];
        }
        else{
            return response()->json([
                'message' => 'Cannot delete as it is in use'], 400);
        }}
    }
    catch(\Exception $exception){
        $depart->status=0;
        $depart->save();
        return response()->json([
            'message' => 'Cannot remove as in use. DEACTIVATED !!!!'], 400);
    }

}

    
}
