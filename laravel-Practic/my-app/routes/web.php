<?php

use App\Http\Controllers\requestController;
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

Route::get('/', function () {

    return view('welcome');
});

Route::get('/hello', function(){
    return "Hello World!!!";
});

Route::get('/contHello', [requestController::class,'books']);
Route::get('/contHello/{id}', [requestController::class,'getBooks']);
