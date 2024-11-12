<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('admin',[AuthController::class,'index'])->name('auth.admin');
Route::post('login',[AuthController::class,'login'])->name('auth.login');