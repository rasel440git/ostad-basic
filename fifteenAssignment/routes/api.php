<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DemoController;
use App\Http\Middleware\DemoMiddleware;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/index/{key}', [DemoController::class, 'index'] )->middleware([DemoMiddleware::class]);
// Route::get('/demo/{key}', [DemoController::class, 'demo'] )->middleware([DemoMiddleware::class]);
// Route::get('/demo1/{key}', [DemoController::class, 'demo1'] )->middleware([DemoMiddleware::class]);
// Route::get('/demo2/{key}', [DemoController::class, 'demo2'] )->middleware([DemoMiddleware::class]);

// route::middleware(['demo'])->group( function () {
// Route::get('/index/{key}', [DemoController::class, 'index']);
// Route::get('/demo/{key}', [DemoController::class, 'demo'] );
// Route::get('/demo1/{key}', [DemoController::class, 'demo1'] );
// Route::get('/demo2/{key}', [DemoController::class, 'demo2'] );

// }); 


    Route::get('/index/{key}', [DemoController::class, 'index']);
    Route::get('/demo/{key}', [DemoController::class, 'demo'] );
    Route::get('/demo1/{key}', [DemoController::class, 'demo1'] );
    Route::get('/demo2/{key}', [DemoController::class, 'demo2'] );
