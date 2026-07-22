<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::middleware('guest')->group(function () {

    Route::get('/login',[LoginController::class,'create'])
        ->name('login');

    Route::post('/login',[LoginController::class,'store']);

    Route::get('/register',[RegisterController::class,'create'])
        ->name('register');

    Route::post('/register',[RegisterController::class,'store']);

});

Route::middleware('auth')->group(function(){

    Route::post('/logout',[LoginController::class,'destroy'])
        ->name('logout');

});

Route::middleware('guest')->group(function () {

    Route::get('/forgot-password',
        [ForgotPasswordController::class,'create'])
        ->name('password.request');

    Route::post('/forgot-password',
        [ForgotPasswordController::class,'store'])
        ->name('password.email');

    Route::get('/reset-password/{token}',
        [ResetPasswordController::class,'create'])
        ->name('password.reset');

    Route::post('/reset-password',
        [ResetPasswordController::class,'store'])
        ->name('password.update');

});

Route::middleware('auth')->group(function(){

    Route::get('/verify-email',function(){

        return view('auth.verify-email');

    })->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}',
        function(EmailVerificationRequest $request){

            $request->fulfill();

            return redirect()->route('dashboard');

        })->middleware('signed')
          ->name('verification.verify');

    Route::post('/email/verification-notification',
        function(Request $request){

            $request->user()->sendEmailVerificationNotification();

            return back();

        })->middleware('throttle:6,1')
          ->name('verification.send');

});