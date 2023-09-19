<?php
namespace App\Helpers;

class LMSBase {
    static function getStudentInfo(string $id, string $token) {
        if (!$token) {
            return abort(401, 'Необходимо авторизоваться');
        }

        $url = env('AKADA_API_HOST').'/get_user_info';
        $options = [
            'token' => $token,
            'data' => ['studentId' => $id]
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
        
        return ['status' => $status, 'err' => json_decode($error), 'res' => json_decode($response)];
    }
}