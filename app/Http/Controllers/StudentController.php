<?php

namespace App\Http\Controllers;

use App\Helpers\LMSBase;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getInfo(Request $req, string $id) {
        $lms_base = new LMSBase();
        $res = $lms_base->getStudentInfo($req->$id, $_COOKIE['token']);

        return response($res)
            ->header('Content-Type', 'application/json');
    }

    public function authorization(Request $req) {
        $url = env('AKADA_API_HOST').'/authorization';
        $options = [
            'data' => [
                'username' => $req->username,
                'password' => $req->password
            ]
        ];
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($options));

        $response = curl_exec($ch);
        $error = curl_error($ch);

        curl_close($ch);

        $status = curl_getinfo($ch)['http_code'];

        return response(['res' => json_decode($response), 'err' => json_decode($error), 'status' => $status], $status)
            ->header('Content-Type', 'application/json');
    }
}
