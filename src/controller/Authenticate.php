<?php

namespace App\Controller;
use App\Entity\User\UserInterface;

class Authenticate{

    function __constructor(){
        date_default_timezone_set('America/Sao_Paulo');
    }

    public function login(UserInterface $user):array{

        if($user->isBlocked()){
            return [
                "message" => "Muitas tentativas de logins, tente mais tarde.",
                "status" => 403,
            ];
        }

        return $user->authenticate();

    }

}