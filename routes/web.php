<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\UserController;

Route::resource('users',ManagementUserController::class);

Route::get('/user/{name}',[UserController::class,'show']);

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function(){
        return "Halaman Admin Dashboard";
    });
    Route::get('/profile',function(){
        return "Halaman Admin Profile";
    });
});

Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', function(){
        return 'Ini dashboard untuk pengguna yang sudah login';
    });
});

Route::get('/home',[ManagementUserController::class,'index']);

Route::group(['namescape' => 'Frontend'], function (){
    Route::resource('home','HomeController');
});
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

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
