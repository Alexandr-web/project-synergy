<?php
    use App\Helpers\AuthToken;

    function getTokenData() {
        $token = AuthToken::get();
        $token_data = AuthToken::decode($token);

        return $token_data;
    }
?>