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

Route::get('email/resend',  [VerificationController::class,'resend']);

//LATEST
Route::post('login',[userController::class,'login']);
//Student API

Route::post('student/add',[studentController::class,'add']);

Route::group(['middleware' => 'auth:api'], function(){
    //Student table API
    Route::get('student/read',[studentController::class,'getData']);
    Route::get('student/read/{id?}',[studentController::class,'getData1']);
    Route::put('student/update',[studentController::class,'update']);

Route::put('student/activate/{id}',[studentController::class,'activate']);

//Route::put('student/deactivate/{id}',[studentController::class,'deactivate']);

Route::put('student/staff/update',[studentController::class,'staffUpdate']);

Route::post('student/certificate',[studentController::class,'studentCertificates']);

Route::post('student/certificate/pending',[studentController::class,'sapprovalPending']);

Route::post('student/certificate/rejected',[studentController::class,'sRejected']);

Route::put('student/blockstaff/{id}',[studentController::class,'blockStudent']);

Route::put('student/unblockstaff/{id}',[studentController::class,'unblockStudent']);

Route::get('student/staff/{id}',[studentController::class,'studentFaculty']);

//SPorts_games API
Route::get('sports_game/read',[sports_gameController::class,'getData']);

Route::get('sports_game/read/{id?}',[sports_gameController::class,'getData1']);

Route::post('sports_game/add',[sports_gameController::class,'add']);

Route::put('sports_game/update',[sports_gameController::class,'update']);

Route::delete('sports_game/delete/{id}',[sports_gameController::class,'delete']);

//Activity
Route::post('activity/read',[activityController::class,'getData']);

//staff API
Route::get('staff/read',[staffController::class,'getData']);

Route::get('staff/read/{id?}',[staffController::class,'getData1']);

Route::post('staff/read/name',[staffController::class,'staffName']);

Route::post('staff/add',[staffController::class,'add']);

Route::put('staff/update',[staffController::class,'update']);

Route::put('staff/code',[staffController::class,'codeGenerator']);

Route::put('staff/deactivate/{id}',[staffController::class,'deactivate']);

Route::put('staff/activate/{id}',[staffController::class,'activate']);

Route::get('staff/unapproved/{id}',[staffController::class,'approvalPending']);

Route::post('staff/confirmed',[staffController::class,'confirmed']);

Route::put('staff/blockstaff/{id}',[staffController::class,'blockStaff']);

Route::put('staff/unblockstaff/{id}',[staffController::class,'unblockStaff']);

//professional_self_initiative API
Route::get('psi/read',[professional_self_initiativesController::class,'getData']);

Route::get('psi/read/{id}',[professional_self_initiativesController::class,'getData1']);

Route::post('psi/add',[professional_self_initiativesController::class,'add']);

Route::put('psi/update',[professional_self_initiativesController::class,'update']);

Route::delete('psi/delete/{id}',[professional_self_initiativesController::class,'delete']);

//national_initiative API
Route::get('ni/read',[national_initiativeController::class,'getData']);

Route::get('ni/read/{id}',[national_initiativeController::class,'getData1']);

Route::post('ni/add',[national_initiativeController::class,'add']);

Route::put('ni/update',[national_initiativeController::class,'update']);

Route::delete('ni/delete/{id}',[national_initiativeController::class,'delete']);

//leadership_management API
Route::get('lm/read',[leadership_managementsController::class,'getData']);

Route::get('lm/read/{id}',[leadership_managementsController::class,'getData1']);

Route::post('lm/add',[leadership_managementsController::class,'add']);

Route::put('lm/update',[leadership_managementsController::class,'update']);

Route::delete('lm/delete/{id}',[leadership_managementsController::class,'delete']);

//level API
Route::post('level/read',[levelController::class,'getData1']);

Route::get('level/read_all',[levelController::class,'getData']);

Route::post('level/add',[levelController::class,'add']);

Route::put('level/update',[levelController::class,'update']);

Route::delete('level/delete/{id}',[levelController::class,'delete']);

//entrepreneurship_innovation API
Route::get('ei/read',[entrepreneurship_innovationController::class,'getData']);

Route::get('ei/read/{id}',[entrepreneurship_innovationController::class,'getData1']);

Route::post('ei/add',[entrepreneurship_innovationController::class,'add']);

Route::put('ei/update',[entrepreneurship_innovationController::class,'update']);

Route::delete('ei/delete/{id}',[entrepreneurship_innovationController::class,'delete']);

//cultural_acitivities_participation API
Route::get('cap/read',[cultural_acitivities_participationsController::class,'getData']);

Route::get('cap/read/{id}',[cultural_acitivities_participationsController::class,'getData1']);

Route::post('cap/add',[cultural_acitivities_participationsController::class,'add']);

Route::put('cap/update',[cultural_acitivities_participationsController::class,'update']);

Route::delete('cap/delete/{id}',[cultural_acitivities_participationsController::class,'delete']);

//department API
Route::get('department/read',[departmentController::class,'getData']);

Route::get('department/read/{id}',[departmentController::class,'getData1']);

Route::post('department/add',[departmentController::class,'add']);

Route::put('department/update',[departmentController::class,'update']);

Route::delete('department/delete/{id}',[departmentController::class,'delete']);

//category API
Route::get('category/read',[categorieController::class,'getData']);

Route::get('category/read/{id}',[categorieController::class,'getData1']);

Route::get('category/activity/{id}',[categorieController::class,'activityList']);

Route::put('category/update',[categorieController::class,'update']);

Route::delete('category/delete/{id}',[categorieController::class,'delete']);


//certificate API
Route::get('certificate/read',[certificateController::class,'getData']);

Route::get('certificate/read/{id}',[certificateController::class,'getData1']);

//Route::post('certificate/add',[certificateController::class,'calculate']);

Route::put('certificate/update',[certificateController::class,'update']);

Route::delete('certificate/delete/{id}',[certificateController::class,'delete']);

Route::put('certificate/reject',[certificateController::class,'reject']);


Route::put('certificate/approve',[certificateController::class,'approve']);

Route::post('certificate/add',[certificateController::class,'add']);

Route::post('certificate/test2',[certificateController::class,'add2']);


    });




// Route::group(['middleware' =>['protectedpages']],function(){
    
// });

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact ashwinsabu2000@gmail.com'], 404);
});

 