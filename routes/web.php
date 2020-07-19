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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/user/{name}', function ($name) {
//     return "สวัสดีuser $name";
// });

// Route::get('/plus/{num1}/{num2}', function ($num1, $num2) {
//    return $num1 + $num2;
// });
// Route::get('/showdetail/{name}/{age}/{message}', function ($name, $age,$message){
//     return("สวัสดี $name คุณมีอายุ $age และคุณพูดว่า '$message'");
// });
Route::get('/','HomeController@index');
Route::get('/create','HomeController@create');
Route::get('/login','HomeController@login');
Route::post('/store',"HomeController@store");
Route::get('/delete/{id}','HomeController@delete');
