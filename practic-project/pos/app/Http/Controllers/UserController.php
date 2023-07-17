<?php

namespace App\Http\Controllers;
use App\Helper\JWTtoken;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function userRegistration(Request $request){

        try{
            User::create([
                'firstName' =>$request->input('firstName'),
                'lastName'  =>$request->input('lastName'),
                'email'     =>$request->input('email'),
                'mobile'    =>$request->input('mobile'),
                'password'  =>$request->input('password'),
            ]);

        return response()->json([
            'status'=>'Success',
            'message'=>'User Register Successfully'
        ]);   
        }
        catch(Exception $e){
            return response()->json([
                'status'=>'Failed',
                'message'=>'User Registation Failed'
            ]);   
        }

       
    }

    function userLogin(Request $request){
        $count= User::where('email', '=', $request->input('email'))
            ->where('password', '=', $request->input('password'))
            ->count();

            if($count==1){
                
               $token= JWTtoken::createToken($request->input('email'));

               return response()->json([
                'status'=>'Success',
                'message'=>'User login successfull',
                'token'=>$token
                ],status:200);   

            }else {
                return response()->json([
                    'status'=>'Failed',
                    'message'=>'unauthorized'
                ],status:200);   
            }
    }
}
