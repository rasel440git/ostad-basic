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

    function userLoginPage(){
        return view('pages.auth.login-page');
    }

    function userRegistrationPage(){
        return view('pages.auth.registration-page');
    }

    function sentOTPPage(){
        return view('pages.auth.send-otp-page');
    }

    function verifyOTPPage(){
        return view('pages.auth.verify-otp-page');
    }

    function resetPasswordPage(){
        return view('pages.auth.reset-pass-page');
    }

    function dashboardPage(){
        return view('pages.dashboard.dashboard-page');
    }





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
                'message'=>'User login successfull'
                
                ],status:200)->cookie('token',$token,60*24*30);   

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
                 'message'=>'OTP Verification Successfull'
                 
                 ],status:200)->cookie('token',$token,60*24*30);
 
               }else{
                    return response()->json([
                        'status'=>'Failed',
                        'message'=>'Unauthrized'
                    ],status:200); 
               }

    }

    function resetPassword(Request $request){
       try{
        $email= $request->header('email');
        $password= $request->input('password');

        User::where('email','=',$email)->update(['password'=>$password]);
            return response()->json([
                'status'=>'Success',
                'message'=>'Reset Successfull'                
                ],status:200);   

       } catch(Exception $e){
        return response()->json([
            'status'=>'Faild',
            'message'=>'Reset Faild',                
            ],status:401); 
       }
    }
}
