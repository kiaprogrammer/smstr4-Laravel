<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ManagementUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

Route::get('/', function () {
    return redirect()->route('login'); //Arahkan ke login
});

Auth::routes();
Route::get('/home',[App\Http\Controllers\Frontend\HomeController::class,'index'])->name('');

Route::get('/user/{name}', [UserController::class, 'show']);

Route::get('/user', [UserController::class, 'controller']);

Route::get('/user1', [ManagementUserController::class, 'index']);
