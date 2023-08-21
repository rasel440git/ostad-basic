<?php

namespace App\Http\Middleware;

use App\Helper\JWTtoken;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenVerificationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
//     public function handle(Request $request, Closure $next): Response
//     {
//         $token= $request->cookie('token');
//         $result= JWTtoken::verifyToken($token);
//         //var_dump($result); // Debug output

//         if( $result=="unauthorized"){

//             return response()->json([
//                 'status'=>'failed',
//                 'message'=>'unauthorized'
//             ], 401); 
//         }
//         else{
//            $request->headers->set('email', $result);
//            //$request->headers->set('email',  (string) $result);

//             return $next($request);
//         }

       
//     }
// }



//using chatGTP
public function handle(Request $request, Closure $next): Response
{
    $token = $request->cookie('token');
    $result = JWTtoken::verifyToken($token);

    if ($result === 'unauthorized') {
        return response()->json([
            'status' => 'failed',
            'message' => 'unauthorized'
        ], 401);
    } else {
        if (is_string($result)) {
            // Handle the case where $result is a string
            $request->headers->set('email', $result);
        } elseif (is_object($result)) {
            // Handle the case where $result is an object
            // You need to extract the email value from the object
            $email = isset($result->email) ? $result->email : '';
            $request->headers->set('email', $email);
        }
        return $next($request);
    }
}

}