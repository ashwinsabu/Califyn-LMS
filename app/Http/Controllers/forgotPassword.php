<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpSender;
use DB;

class forgotPassword extends Controller
{
    function generateOtp(Request $req){
        $otp=rand(10000,99999);
        $user=User::where('email',$req->email)->get();
        $user->otp=$otp;
        if($user->save()){
            return["message"=>"OTP Send Successfully"];
        }
        Mail::to($req->email)->send(new OtpSender($otp));
        
    }

    function generateOtp1(Request $req){
        $otp=rand(10000,99999);
        $result=DB::table('users')
              ->where('email', $req->email)
              ->update(['otp' => $otp]);
        
        if($result){
            Mail::to($req->email)->send(new OtpSender($otp));
            return["Message"=>"Success"];
        }
        else{
            return response()->json([
                'message' => 'failed'], 400);
        }
        
    }
}
