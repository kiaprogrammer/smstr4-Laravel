<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAge;

Route::get('/', function(){
})->middleware('first','second');

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::get('/register', function(){
    return view('auth.register');
})->name('register');

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/register', [RegisterController::class,'register'])->name('register.store');

Route::get('admin/profile', function(){
})->middleware(CheckAge::class);

Route::get('/', function(){
})->middleware('web');

Route::group(['middleware' => ['web']], function(){
});

Route::middleware(['web','subscribed'])->group(function (){
});

Route::put('post/{id}', function ($id){
    //
})->middleware('role:editor');

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/user/{name}', [UserController::class, 'show']);

Route::get('/user', [UserController::class, 'controller']);

Route::get('/user1', [ManagementUserController::class, 'index']);
