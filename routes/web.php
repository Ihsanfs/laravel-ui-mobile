<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\EmailVerificationNotificationController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', fn () => view('login'));

// Route::get('users', [UserController::class, 'index']);
// Route::get('/user', [UserController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
// #register
// Route::controller(RegisterController::class)->group(function () {
//     Route::get('register', 'showRegistrationForm')->name('register');
//     Route::post('register', 'registerUser')->name('register');
//    });

// #login
// Route::controller(LoginController::class)->group(function () {
//     Route::get('login', 'loginForm')->name('login');
//     Route::post('login', 'loginUser')->name('login');
//    });



Route::middleware('guest')->group(function () {
    Route::controller(RegisterController::class)->group(function () {
        Route::get('register', 'showRegistrationForm')->name('register');
        Route::post('register', 'registerUser')->name('register');
    });
    Route::controller(LoginController::class)->group(function () {
        Route::get('login', 'showLoginForm')->name('login');
        Route::post('login', 'loginUser')->name('login');
    });




});

Route::post('logout', [LogoutController::class, 'index'])
->middleware('auth')
->name('logout');
Route::get('forgotpassword', [ForgotPasswordController::class, 'create'])
->name('password.request');
Route::post('forgotpassword', [ForgotPasswordController::class, 'store'])
->name('password.email');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'create'])
->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'store'])
->name('password.update');



    // Route::get('verify-email', [EmailVerificationNotificationController::class, 'notice'])
    // ->middleware('auth')
    // ->name('verification.notice');
//     Route::middleware('throttle:6,1')->group(function () {
//     Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
//     ->middleware(['signed', 'throttle:6,1'])
//     ->name('verification.verify');
// //     Route::post('email/verification-notification',
// //    [EmailVerificationNotificationController::class, 'sendVerification'])
// //     ->name('verification.send');
    // });
    // Route::post('logout', LogoutController::class)->name('logout');

