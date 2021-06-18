<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\User;
use App\staff;
use Illuminate\Support\Facades\Hash;
use DB;
use App\certificate;
use Validator;


class studentController extends Controller
{   public $successStatus = 200;
    function getData(){
        $result= student::with('staffRelation:id,name','departmentRelation')->get();
        if(! $result){
            abort(404);
        }
        else{
            return(response()->json(array( "data" => $result)));
        }
        
    }

    function getData1($id){
        $result= student::with('staffRelation:id,name','departmentRelation')->find($id);
        if(! $result){
            abort(404);
        }
        else{
            return(response()->json(array( "data" => $result)));
        }
    }
    function add(Request $req){
        try{
        $student=new student;
        $user=new User;

        $val = Validator::make($req->all(),$student->createRules);

        $val1 = Validator::make($req->all(),$user->createRules);

        if ($val->fails()) {
            return response()->json($val->errors(),422);
        }
        if ($val1->fails()) {
            return response()->json($val1->errors(),422);
        }
        
        $student->name=$req->name;
        $student->register_no=$req->register_no;
        $password=$req->password;
        $student->password = Hash::make($password);
        $user->password = Hash::make($password);
        $student->department_id=$req->department_id;
        $student->yop=$req->yop;
        $student->status=1;
        $student->c_count=0;
        $student->email=$req->email;
        $user->email=$req->email;
        $student->semester=$req->semester;
        $student->section=$req->section;
        $student->points=$req->points;
        
        if($student->save() && $user->save()){
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['message'=>'success','success'=>$success, $this-> successStatus]); 
        }
        else{
            return response()->json(false,400);
        }
    }
        catch(\Exception $exception){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function update(Request $req){
        try{
        $student=student::find($req->id);
        $student->name=$req->name;
        $student->register_no=$req->register_no;
        $student->department_id=$req->department_id;
        $student->yop=$req->yop;
        $student->staff_id=$req->staff_id;
        $student->semester=$req->semester;
        $student->section=$req->section;
        $student->points=$req->points;
        $result=$student->save();
        if($result){
            return["Message"=>"Success"];
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

    function delete($id){
        try{
        $student=student::find($id);
        $user=DB::table('users')->where('email', '=', $student->email)->delete();
        if($student==null){
            return["message"=>"No row found"];
        }
        else{
        $result=$student->delete();
        if($result & $user){
            return["Message"=>"Deleted"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }}
    }
    catch(\Exception $exception){
       return response()->json([
                'message' => 'failed'], 400);
    }
    }

    function staffUpdate(Request $req){
        try{
        $staff=DB::table('staffs')
                ->where('code',$req->code)
                ->where('status',1)
                ->first();
        if($staff){
            $student=student::find($req->student_id);
            $student->staff_id=$staff->id;
            $result=$student->save();
            $result1 = DB::table('certificates')
                ->where('student_id', $req->student_id)
                ->update(['staff_id' => $staff->id]);

            if($result){
                return["Message"=>"staff is updated"];
            }
        }
        else{
            return["message"=>"No active staff with this code. Kindly recheck"];
            }
        }
        catch(\Exception $exception){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function studentCertificates(Request $req){
        try{
            $result=certificate::with('studentRelation','categoryRelation','levelRelation')
                        ->where('status',1)
                        ->where('student_id', $req->id)
                        ->where('semester', '=', $req->semester)
                        ->get();
            //$result=$result->sortBy('created_at');
            return(response()->json(array( "data" => $result)));
        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function sapprovalPending(Request $req){
        try{
            $result = certificate::with('studentRelation','categoryRelation','levelRelation')
                        ->where('status',0)
                        ->where('student_id', $req->id)
                        ->get();
            return(response()->json(array( "data" => $result)));
        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }


    function sRejected(Request $req){
        try{
            $result=certificate::with('studentRelation','categoryRelation','levelRelation')
                        ->where('status',2)
                        ->where('student_id', $req->id)
                        ->get();
            return(response()->json(array( "data" => $result)));
        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }

    function blockStudent($id){
        try{
            $student=student::find($id);
            $student->status=0;
            $result=$student->save();
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

    function unblockStudent($id){
        try{
            $student=student::find($id);
            $student->status=0;
            $result=$student->save();
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


    //Gives the list of students under each faculty
    function studentFaculty($id){
        try{
            $result=student::where('staff_id',$id)->get();
            if(! $result){
                abort(404);
            }
            else{
                return(response()->json(array( "data" => $result)));
            }

        }
        catch(\Exception $e){
            return response()->json([
                'message' => 'failed'], 400);
        }
    }



}
