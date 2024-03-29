<?php
namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use App\Helper\Key; 
use PhpParser\Node\Stmt\Catch_;

class JWTtoken{

    public static function createToken($userEmail):string{
        $key= env('JWT_KEY');
        $payload= [
            'iss'=>'laravel-token',
            'iat'=>time(),
            'exp'=>time()+60*60,
            'userEmail'=>'$userEmail'
        ];

        return JWT::encode($payload, $key, 'HS256');

    }

    public static function createTokenForSetPassword($userEmail):string{
        $key= env('JWT_KEY');
        $payload= [
            'iss'=>'laravel-token',
            'iat'=>time(),
            'exp'=>time()+60*5,
            'userEmail'=>'$userEmail'
        ];

        return JWT::encode($payload, $key, 'HS256');

    }

    public static function verifyToken($token):string{
                
        try{
            $key= env('JWT_KEY');
                $decode= JWT::decode($token,new Key($key, 'HS256'));
                return $decode->userEmail;
        }
        catch(Exception $e){
            return "unauthorized";
    }
}

}
