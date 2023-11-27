<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        return"Hello form index function";
    }

    public function demo(){
        return"Hello you are demo function, ";
    }
    public function demo1(){
        return"Hello you are demo1 function, ";
    }
    public function demo2(){
        return"Hello you are demo2 function, ";
    }

}
