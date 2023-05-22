<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //Question 1 & 2:
    function userInfo(Request $request){

        $name= $request->input('name');

        $userAgent= $request->header('userAgent');

        return "Your Name is : {$name} and Agent: {$userAgent}";

    }

    //Question 3:
    function pageInfo(Request $request){
         $page= $request->page;
         return $page;
        // $page = $request->input('page');
        // return $page ?? 'Null';
    }

    //Question 4:
    function jesonResponData(Request $request){

        $data= $request->input();

        return response()->json($data);

        }

    //Question 5:
    function fileUpload(Request $request)   {
        $img = $request->file(key:'avatar');
        $img->move(public_path('uploads'), $img->getClientOriginalName());
        //$img->storeAs('uploads', $img->getClientOriginalName());

        return "Upload Success!";
    }

    //Question 6:
    function returnCookie(Request $request):array|null{
        return $rememberToken= $request->cookie('remember_token');

    }

    //Question 7:
    function submitRequest(Request $request){
        $email = $request->input('email');

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.',
        'email'=>$email
    ]);

    }
}
