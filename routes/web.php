<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAge;

Route::get('/', function(){
})->middleware('first','second');

Route::get('admin/profile', function(){
})->middleware(CheckAge::class);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/user/{name}', [UserController::class, 'show']);

Route::get('/user', [UserController::class, 'controller']);

Route::get('/user1', [ManagementUserController::class, 'index']);
