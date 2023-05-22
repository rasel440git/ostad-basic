<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function userInfo(Request $request){

        $name= $request->input('name');

        $userAgent= $request->header('userAgent');

        return "Your Name is : {$name} and Agent: {$userAgent}";

    }

    function pageInfo(Request $request){
         $page= $request->query('page');
         return $page;
    }
}
