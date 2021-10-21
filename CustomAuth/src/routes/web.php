<?php
$namespace = 'DevinGray\CustomAuth\Http\Controllers';

use DevinGray\CustomAuth\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;


Route::middleware('web')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('register', [CustomAuthController::class, 'create'])->name('register');
        Route::post('register', [CustomAuthController::class, 'store'])->name('register.attempt');
        Route::get('/login',[CustomAuthController::class,'login'])->name('login');
        Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
    });
    Route::middleware('auth')->group(function () {
        Route::get('home', function () {
            return view('custom-auth::home');
        })->name('home');
        Route::get('logout', [CustomAuthController::class,'logout'])->name('logout');
    });

});
