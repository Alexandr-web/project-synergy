<?php
namespace App\Helpers;

use ReallySimpleJWT\Parse;
use ReallySimpleJWT\Decode;
use ReallySimpleJWT\Jwt;
use ReallySimpleJWT\Token;

class AuthToken {
    static function get() {
        if (!array_key_exists('token', $_COOKIE)) {
            return '';
        }

        return $_COOKIE['token'];
    }

    static function decode(string $token) {
        if (!$token) {
            return null;
        }

        $jwt = new Jwt($token);
        $parse = new Parse($jwt, new Decode());
        $parsed = $parse->parse();

        return $parsed->getPayload();
    }

    static function create($data) {
        $expiration = time() + 3600;
        $secret = env('SECRET_KEY');
        $issuer = env('APP_URL');

        $payload = [
            'iat' => time(),
            'uid' => 1,
            'exp' => $expiration,
            'iss' => $issuer,
        ];

        return Token::customPayload(array_merge($payload, $data), $secret);
    }
}