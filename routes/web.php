<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\TestpageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class,'registerLayout'])->name('registerLayout');
Route::post('/register', [AuthController::class,'register'])->name('register');

Route::group(['middleware'=>'isLogin'],function(){
    Route::get('/login', [AuthController::class,'loginLayout'])->name('loginLayout');
    Route::post('/login', [AuthController::class,'login'])->name('login');
});

Route::get('/testpage', [TestpageController::class,'testpage'])->name('testpage');
Route::resource('/crud',CrudController::class);

Route::group(['middleware'=>'auth'],function(){

    // auth
    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
});