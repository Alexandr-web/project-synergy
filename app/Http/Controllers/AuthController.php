<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AuthToken;

class AuthController extends Controller
{
    public function login(Request $req) {
        $url = env('KEYCLOAK_HOST').'/auth/realms/'.env('KEYCLOAK_REALM').'/protocol/openid-connect/token';
        $options = [
            'client_id' => env('KEYCLOAK_CLIENT_ID'),
            'client_secret' => env('KEYCLOAK_CLIENT_SECRET'),
            'grant_type' => env('KEYCLOAK_GRANT_TYPE'),
            'username' => $req->username,
            'password' => $req->password,
            'scope' => 'openid'
        ];
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($options));

        $response = curl_exec($ch);
        $error = curl_error($ch);

        curl_close($ch);

        return response(['res' => json_decode($response), 'err' => json_decode($error)], curl_getinfo($ch)['http_code'])
            ->header('Content-Type', 'application/json');
    }

    public function logout(Request $req) {
        $auth = $req->header('Authorization');

        if (!explode(' ', $auth)[1]) {
            return abort(401, 'Необходимо авторизоваться');
        }

        $url = env('KEYCLOAK_HOST').'/auth/realms/'.env('KEYCLOAK_REALM').'/protocol/openid-connect/logout';
        $options = [
            'client_id' => env('KEYCLOAK_CLIENT_ID'),
            'client_secret' => env('KEYCLOAK_CLIENT_SECRET'),
            'refresh_token' => $req->refresh_token
        ];
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: $auth"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($options));

        $response = curl_exec($ch);
        $error = curl_error($ch);

        curl_close($ch);

        $status = curl_getinfo($ch)['http_code'];

        return response(['res' => json_decode($response), 'err' => json_decode($error), 'status' => $status], $status)
            ->header('Content-Type', 'application/json');
    }

    public function renderLoginPage(Request $req) {
        $roles = ['student', 'directorate', 'supervisor'];

        if (!array_key_exists("role", $_GET) || !in_array($_GET['role'], $roles)) {
            return abort(404);
        }

        return view("auth.login", ['role' => $_GET['role']]);
    }
}
