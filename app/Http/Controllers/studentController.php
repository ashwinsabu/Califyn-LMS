<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use App\User;
use App\staff;
use Illuminate\Support\Facades\Hash;
use DB;
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
            $successStatus=400;
            return response()->json(['message'=>'failed', 'status'=>$successStatus]);
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
            return["Result"=>"Failed"];
        }
    }
    catch(\Exception $exception){
        $successStatus=400;
        return response()->json(['message'=>'failed', 'status'=>$successStatus]);
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
            return["Messgae"=>"Not deleted"];
        }}
    }
    catch(\Exception $exception){
        $successStatus=400;
        return response()->json(['message'=>'failed', 'status'=>$successStatus]);
    }
    }

    // function staffSelection(Request $req){
    //     $staff=DB::table('staffs')
    //             ->where('code',$req->code)
    //             ->first();
    //     if($staff){
    //     $student=student::find($req->student_id);
    //     if($student->staff_id==null){
    //     $student->staff_id=$staff->id;
    //     $result=$student->save();
    //     if($result){
    //         return["Message"=>"staff is assigned"];
    //     }
    //     else{
    //         return["Result"=>"Failed due to an error."];
    //     }
    // }
    // else{
    //     return["message"=>"Staff is already assigned"];
    // }
    // }
    // else{
    //     return["message"=>"No staff with this code. Kindly recheck"];
    //     }
    // }


    function staffUpdate(Request $req){
        try{
        $staff=DB::table('staffs')
                ->where('code',$req->code)
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
            return["message"=>"No staff with this code. Kindly recheck"];
            }
        }
        catch(\Exception $exception){
            $successStatus=400;
            return response()->json(['message'=>'failed', 'status'=>$successStatus]);
        }
    }

    function studentCertificates(Request $req){
        try{
            $result=DB::table('certificates')
                        ->where('status',1)
                        ->where('student_id', $req->id)
                        ->where('semester', '=', $req->semester)
                        ->get();
            //$result=$result->sortBy('created_at');
            return(response()->json(array( "data" => $result)));
        }
        catch(\Exception $e){
            $successStatus=400;
            return response()->json(['message'=>'failed', 'status'=>$successStatus]);
        }
    }

}
