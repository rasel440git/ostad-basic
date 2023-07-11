<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
Simple Blog Project using Laravel Eloquent ORM & Axios 

Requirements:

Blog Post List By 

Blog Post Details 

Free comments system  

https://github.com/faisal2410/blog_project/tree/main/database/migrations
|
*/

Route::get('/', function () {
    return view('welcome');
});
