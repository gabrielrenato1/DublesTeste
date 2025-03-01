<?php

namespace App\Controller;
use App\Entity\User\UserEntity;

class Authenticate{

    function __constructor(){
        date_default_timezone_set('America/Sao_Paulo');
    }

    public function login(UserEntity $user):array{

        if($user->isRegistered()){
            
            return [
                "token" => base64_encode(random_bytes(30)),
                "expired_at" => date("Y-m-d h:i:s", strtotime( "+5 hours")),
                "email" => $user->email,
                "status" => 200,
            ];

        }

        return [
            "message" => "Não foi possível fazer login",
            "status" => 401,
        ];

    }

}