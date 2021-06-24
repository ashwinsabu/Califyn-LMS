<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\student;
use App\staff;
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
        
        $user = User::where('email',$req->email)->where('otp',$req->otp)->first();
        $pos = User::where('email',$req->email)->where('otp',$req->otp)->value('position');
        if($user == null){
            return response()->json([
                'message' => 'Incorrect Details Entered'], 400);
        }
        if($pos == 2){
            $role = student::where('email',$req->email)->first();
        }
        else{
            $role = staff::where('email',$req->email)->first();
        }
        
        //$password=Hash::make($req->password);
        $user->password=$req->password;
        $role->password=$req->password;
        if($user->save() && $role->save()){
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
        
    }

    function updatePasswordProfile(Request $req){
        try{
        $password_old = User::where('email',$req->email)->value('password');
        if (Hash::check($req->oldpassword, $password_old)) {

            $user = User::where('email',$req->email)->first();
            $pos = User::where('email',$req->email)->value('position');
            if($pos == 2){
                $role = student::where('email',$req->email)->first();
            }
            else{
                $role = staff::where('email',$req->email)->first();
            }
            
            $password=Hash::make($req->newpassword);
            $user->password=$password;
            $role->password=$password;
            if($user->save() && $role->save()){
                return["Message"=>"Success"];
            }
            else{
                return response()->json([
                    'message' => 'failed'], 400);
            }
                
        }
        else{
            return response()->json([
                'message' => 'Wrong Password'], 400);
        }
    }
    catch(\Exception $exception){
        return response()->json([
                 'message' => 'Error'], 400);
     }
        
    }
}
