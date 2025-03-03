<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

Route::resource('users',ManagementUserController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return "Hallo, selamat datang di Laravel!";
// });

// Route::get('/user/{name}',function($name){
//     return "Halloo, $name";
// });

// Route::get('/user/{name?}',function ($name = 'Tamu'){
//     return "Halo, $name!";
// });

// Route::get('/foo', function(){
//     return 'Hello World';
// });

// Route::get('/foo/{id}', function($id){
//     return 'User ='.$id;
// });

// Route::get('/user', 'UserController@controller');

// Route::redirect('/coba', '/sini');

// Route::view('/welcome','welcome');

// Route::get('/userss/{name?}', function($name=null){
//     return $name;
// });

// Route::get('/users/{nama?}', function($nama = 'John'){
//     return $nama;
// });

// Route::get('/user1', [ManagementUserController::class, 'index']);

// Route::resource('/user1', ManagementUserController::class);

// Route::get('/home', function(){
//     return view('home');
// });
