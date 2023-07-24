<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Create a multi-user todo backend API using Laravel, implementing 
| a JWT token-based authentication system. The API will allow users to create, 
| read, update, and delete their todo items securely using JWT for authentication.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/readTask',[TaskController::class,'index']);