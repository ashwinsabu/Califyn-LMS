<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\student;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpSender;
use Illuminate\Support\Facades\Hash;
use DB;

class forgotPassword extends Controller
{
    function generateOtp1(Request $req){
        try{
        $otp=rand(10000,99999);
        $result=DB::table('users')
              ->where('email', $req->email)
              ->update(['otp' => $otp]);
        
        if($result){
            // Mail::to($req->email)->send(new OtpSender($otp));
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
        
    }catch(\Exception $exception){
       return response()->json([
                'message' => 'failed'], 400);
    }
}
    

    function validataOtp(Request $req){
        $result= User::where('email',$req->email)->where('otp',$req->otp)->get();
        $result=$result->isNotEmpty();
        print($result);
        if($result ){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'Incorrect Otp'], 400);
        }
        
    }
    

    function updatePassword(Request $req){
        $id= User::where('email',$req->email)->where('otp',$req->otp)->value('id');
        $id1= student::where('email',$req->email)->value('id');
        if($id == null){
            return response()->json([
                'message' => 'Incorrect Details Entered'], 400);
        }
        $user=User::find($id);
        $student=student::find($id1);
        $password=$req->password; 
        $user->password=$password;
        $student->password=$password;
        if($user->save() && $student->save()){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
        
    }
}
