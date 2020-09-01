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

Route::get('/login', 'Auth\AuthController@login')->name('login');
Route::post('/postlogin', 'Auth\AuthController@postlogin');

Route::get('/signup', 'SignUpController@index');

Route::get('/forgot','ForgotPasswordController@index');


// middleware
// Route::group(['middleware' => 'auth'], function(){
    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('/home', 'HomeController@index');
    
    Route::get('/dashboard', 'DashboardController@index');

// });