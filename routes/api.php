<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
use App\Http\Controllers\sports_gameController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\professional_self_initiativesController;
use App\Http\Controllers\national_initiativeController;
use App\Http\Controllers\leadership_managementsController;
use App\Http\Controllers\levelController;
use App\Http\Controllers\entrepreneurship_innovationController;
use App\Http\Controllers\cultural_acitivities_participationsController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\categorieController;
use App\Http\Controllers\certificateController;
use App\Http\Controllers\userController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\activityController;
use App\Http\Controllers\forgotPassword;
use App\Http\Controllers\pointController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


        Route::get('email/verify/{id}', [VerificationController::class,'verify'])->name('verification.verify'); // Make sure to keep this as your route name

        Route::get('email/send',  [VerificationController::class,'resend']);

        //LATEST
        Route::post('login',[userController::class,'login']);
        //Student API
        Route::get('department/read',[departmentController::class,'getData']);

        Route::get('department/read/{id}',[departmentController::class,'getData1']);

        Route::post('student/add',[studentController::class,'add']);

        Route::post('generateotp',[forgotPassword::class,'generateOtp1']);

        Route::post('otp/validate',[forgotPassword::class,'validataOtp']);

        Route::put('password/update',[forgotPassword::class,'updatePassword']);

        Route::post('staff/add/admin',[staffController::class,'addAdmin']);

        Route::get('user',[userController::class,'getData']);

Route::group(['middleware' => 'auth:api'], function(){

    Route::group(['middleware' =>['protectedstudents']],function(){

        Route::put('student/update',[studentController::class,'update']);

        Route::put('student/staff/update',[studentController::class,'staffUpdate']);

        Route::post('student/certificate',[studentController::class,'studentCertificates']);

        Route::post('student/certificate/pending',[studentController::class,'sapprovalPending']);

        Route::post('student/certificate/rejected',[studentController::class,'sRejected']);

        Route::post('staff/read/name',[staffController::class,'staffName']);

        Route::post('certificate/add',[certificateController::class,'add']);

        Route::delete('certificate/delete/{id}',[certificateController::class,'delete']);
    });



    Route::group(['middleware' =>['protectedstaff']],function(){
        Route::get('student/staff/{id}',[studentController::class,'studentFaculty']);

        Route::put('staff/update',[staffController::class,'update']);

        Route::put('staff/code',[staffController::class,'codeGenerator']);

        Route::get('staff/unapproved/{id}',[staffController::class,'approvalPending']);

        Route::post('staff/confirmed',[staffController::class,'confirmed']);

        Route::put('certificate/reject',[certificateController::class,'reject']);


        Route::put('certificate/approve',[certificateController::class,'approve']);
    });



    Route::group(['middleware' =>['protectedadmin']],function(){
        
        Route::put('student/blockstudent/{id}',[studentController::class,'blockStudent']);

        Route::put('student/unblockstudent/{id}',[studentController::class,'unblockStudent']);

        Route::delete('category/delete/{id}',[categorieController::class,'delete']);

        Route::post('point/get',[pointController::class,'getData2']);

        Route::post('staff/add',[staffController::class,'add']);

        Route::put('staff/blockstaff/{id}',[staffController::class,'blockStaff']);

        Route::put('staff/unblockstaff/{id}',[staffController::class,'unblockStaff']);

        Route::post('level/add',[levelController::class,'add']);

        Route::put('level/update',[levelController::class,'update']);

        Route::delete('level/delete/{id}',[levelController::class,'delete']);

        Route::post('department/add',[departmentController::class,'add']);

        Route::put('department/update',[departmentController::class,'update']);

        Route::put('category/update',[categorieController::class,'update']);

        Route::post('category/add',[categorieController::class,'add']);

        Route::get('certificate/read',[certificateController::class,'getData']);

        Route::get('certificate/read/{id}',[certificateController::class,'getData1']);

        
        //points API
        Route::get('point/read',[pointController::class,'getData']);

        Route::get('point/read/{id}',[pointController::class,'getData1']);

        

        Route::post('point/add',[pointController::class,'add']);

        Route::put('point/update',[pointController::class,'update']);

        Route::delete('point/delete/{id}',[pointController::class,'delete']);

            //Activity
        Route::post('activity/read',[activityController::class,'getData']);

        Route::post('activity/add',[activityController::class,'add']);

        Route::put('activity/update',[activityController::class,'update']);
    });
    
    
    Route::post('logout',[userController::class,'logout']);

    Route::get('student/read',[studentController::class,'getData']);

    Route::get('staff/read',[staffController::class,'getData']);

    Route::get('staff/read/{id?}',[staffController::class,'getData1']);

    Route::get('student/read',[studentController::class,'getData']);

    Route::get('student/read/{id?}',[studentController::class,'getData1']);

    //level API
    

    Route::get('level/read_all/{id}',[levelController::class,'getData']);

    Route::get('level/read/{id}',[levelController::class,'getDataAll']);
    //Route::delete('department/delete/{id}',[departmentController::class,'delete']);

    //category API
    Route::get('category/read',[categorieController::class,'getData']);

    Route::get('category/read_all',[categorieController::class,'getData2']);

    Route::get('category/read/{id}',[categorieController::class,'getData1']);

    Route::get('activity/{id}',[activityController::class,'activityList']);

    Route::get('activity_all/{id}',[activityController::class,'getDataAll']);

    Route::put('profile/password/update',[forgotPassword::class,'updatePasswordProfile']);

    
    

    //Route::post('certificate/add',[certificateController::class,'calculate']);

    // Route::put('certificate/update',[certificateController::class,'update']);

    

    });

    
    Route::post('point/gets',[pointController::class,'getData']);
    

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact ashwinsabu2000@gmail.com'], 404);
});

 