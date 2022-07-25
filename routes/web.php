<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/index', function () {
//     return view('index')->middleware('isLoggedIn');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/Coaching', function () {
//     return view('Coaching');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/Finance', function () {
//     return view('Finance');
// });

// Route::get('/network', function () {
//     return view('network');
// });

// Route::get('/registration', function () {
//     return view('registration');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/index','App\Http\Controllers\RegistrationController@index')->middleware('isLoggedIn');
Route::get('/about','App\Http\Controllers\RegistrationController@about')->middleware('isLoggedIn');
Route::get('/Coaching','App\Http\Controllers\RegistrationController@Coaching')->middleware('isLoggedIn');
Route::get('/contact','App\Http\Controllers\RegistrationController@contact')->middleware('isLoggedIn');
Route::get('/Finance','App\Http\Controllers\RegistrationController@Finance')->middleware('isLoggedIn');
Route::get('/network','App\Http\Controllers\RegistrationController@network')->middleware('alreadyLoggedIn');
Route::get('/','App\Http\Controllers\RegistrationController@login')->middleware('alreadyLoggedIn');
Route::get('/registration','App\Http\Controllers\RegistrationController@registration')->middleware('alreadyLoggedIn');
Route::post('/register_submit','App\Http\Controllers\RegistrationController@store');
Route::post('/login_submit','App\Http\Controllers\RegistrationController@loginstore');
Route::post('/contact_submit','App\Http\Controllers\RegistrationController@contactstore');



// Route::get('/dashboard','App\Http\Controllers\RegistrationController@dashboard')->middleware('isLoggedIn');
// Route::get('/dashboard',[App\Http\Controllers\RegistrationController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout','App\Http\Controllers\RegistrationController@logout');
