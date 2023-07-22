<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//API Routes
Route::post('/user-registration', [UserController::class, 'userRegistration']);
Route::post('/user-login', [UserController::class, 'userLogin']);
Route::post('/sent-otp', [UserController::class, 'sentOTPcode']);
Route::post('/verify-otp', [UserController::class, 'verifyOTP']);
//Token Verification
Route::post('/reset-password', [UserController::class, 'resetPassword'])->middleware([TokenVerificationMiddleware::class]);


//Web Routes
Route::get('/userLogin', [UserController::class, 'userLoginPage']);
Route::get('/userRegistration', [UserController::class, 'userRegistrationPage']);
Route::get('/sentOTP', [UserController::class, 'sentOTPPage']);
Route::get('/verifyOTP', [UserController::class, 'verifyOTPPage']);
Route::get('/resetPassword', [UserController::class, 'resetPasswordPage']);
Route::get('/dashboard', [UserController::class, 'dashboardPage']);





