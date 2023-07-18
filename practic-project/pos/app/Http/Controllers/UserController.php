<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

use App\Helper\JWTtoken;
use App\Mail\OTPMail;
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

    function sentOTPcode(Request $request){
        $eamil= $request->input('email');
        $otp= rand(1000,9999);
        $count= User::where('email','=', $eamil)->count();

        if( $count==1){

                Mail::to($eamil)->send(new OTPMail($otp));
                 User::where('email','=', $eamil)->update(['otp'=>$otp]);

                 return response()->json([
                    'status'=>'Success',
                    'message'=>'4 digit OTP sent'
                ],status:200);   
        }else{
            return response()->json([
                'status'=>'Failed',
                'message'=>'unauthorized'
            ],status:200);   
        }

    }

    function verifyOTP(Request $request){
        $email= $request->input('email');
        $otp= $request->input('otp');

        $count= User::where('email','=', $email)
               ->where('otp','=',$otp)->count();

               if($count==1){
                User::where('email','=', $email)->update(['otp'=>0]);

                $token= JWTtoken::createTokenForSetPassword($request->input('email'));

                return response()->json([
                 'status'=>'Success',
                 'message'=>'OTP Verification Successfull',
                 'token'=>$token
                 ],status:200);   
 
               }else{
                    return response()->json([
                        'status'=>'Failed',
                        'message'=>'OTP not correct'
                    ],status:200); 
               }

    }
}
