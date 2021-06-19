<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;

Route::get('/send-mail', function () {

    Mail::to('newuser@example.com')->send(new MailtrapExample());

    return 'A message has been sent to Mailtrap!';

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('students',[studentController::class,'getData']);

Auth::routes();

Route::view('noaccess','noaccess');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
