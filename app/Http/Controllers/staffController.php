<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\staff;
use App\User;
use App\certificate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DB;
use Validator;


class staffController extends Controller
{   
    public $successStatus = 200;
    function getData(){
        $result =staff::with('departmentRelation')->get();
        if(! $result){
            abort(404);
        }
        else{
            return(response()->json(array( "data" => $result)));
        }
    }

    function getData1($id){
        $result= staff::with('departmentRelation')->find($id);
        if(! $result){
            abort(404);
        }
        else{
            return(response()->json(array( "data" => $result)));
        }
    }

    function add(Request $req){
        try{
        $staff=new staff;
        $user=new User;

        $val = Validator::make($req->all(),$staff->createRules);

        $val1 = Validator::make($req->all(),$user->createRules);

        if ($val->fails()) {
            return response()->json($val->errors(),422);
        }
        if ($val1->fails()) {
            return response()->json($val1->errors(),422);
        }
        $staff->name=$req->name;
        $password=$req->password;
        $staff->password = Hash::make($password);
        $user->password = Hash::make($password);
        $staff->department_id=$req->department_id;
        $staff->designation=$req->designation;
        $staff->email=$req->email;
        $staff->yop=$req->yop;
        $staff->status=1;
        $staff->section=$req->section;
        $user->email=$req->email;
        $staff->role=$req->role;
        $result=$staff->save();
        $result1=$user->save();
        if($result && $result1){
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['message'=>'success','success'=>$success, "statusCode"=>$this-> successStatus]); 
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }
    catch(\Exception $exception){
       return response()->json([
                'message' => 'failed'], 400);
    }
    }

    function codeGenerator(Request $req){
        $staff=staff::find($req->id);
        if($staff->code==null){
            $staff->code=Str::random(4).$staff->id;
        }
        $result=$staff->save();
        if($result){
            return["message"=>"Code generated"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        $staff=staff::find($req->id);
        $staff->name=$req->name;
        $staff->department_id=$req->department_id;
        $staff->designation=$req->designation;
        $staff->yop=$req->yop;
        $staff->section=$req->section;
        $staff->role=$req->role;
        $result=$staff->save();
        if($result){
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success'=>$success], $this-> successStatus); 
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function delete($id){
        $staff=staff::find($id);
        $user=DB::table('users')->where('email', '=', $staff->email)->delete();
        if($staff==null){
            return response()->json([
                'message' => 'No row found.'], 400);
        }
        else{
        $result=$staff->delete();
        if($result  & $user){
            return["Message"=>"Deleted"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }}
    }
    function staffName(Request $req){
        try{
            $successStatus=200;
            $staff=DB::table('staffs')->where('code', '=', $req->code)->value('name');
            return response()->json(['name'=>$staff, 'status'=>$successStatus]);
        }
        catch(\Exception $exception){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function approvalPending($id){
        try{
            $result=certificate::with('studentRelation','categoryRelation','levelRelation')
                        ->where('staff_id', $id)
                        ->where('status',0)
                        ->get();
            return(response()->json(array( "data" => $result)));
        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }


    function confirmed(Request $req){
        try{
            $result=DB::table('certificates')
                        ->where('status',1)
                        ->where('staff_id', $req->id)
                        ->where('semester', $req->semester)
                        ->get();
            //$result=$result->sortBy('created_at');
            return(response()->json(array( "data" => $result)));
        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function blockStaff($id){
        try{
            $staff=staff::find($id);
            $staff->status=0;
            $result=$staff->save();
            if($result){
                return["Message"=>"Success"];
            }
            else{
                return response()->json([
                    'message' => 'failed'], 400);
            }
        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function unblockStaff($id){
        try{
            $staff=staff::find($id);
            $staff->status=0;
            $result=$staff->save();
            if($result){
                return["Message"=>"Success"];
            }
            else{
                return response()->json([
                    'message' => 'failed'], 400);
            }
        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }
}


