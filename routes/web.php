<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\Authenmdl;
use App\Http\Middleware\Loginmdl;

Route::get('/', function () {
    return view('welcome');
});

// **BACKEND ROUTES **//
Route::get('dashboard/index',[DashboardController::class,'index'])->name('dashboard.index')->middleware(Authenmdl::class);

Route::get('admin',[AuthController::class,'index'])->name('auth.admin')->middleware(Loginmdl::class);
Route::post('login',[AuthController::class,'login'])->name('auth.login');  
Route::get('logout',[AuthController::class,'logout'])->name('auth.logout');