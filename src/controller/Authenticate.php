<?php

namespace App\Controller;
use App\Entity\User\UserInterface;

class Authenticate{

    function __constructor(){
        date_default_timezone_set('America/Sao_Paulo');
    }

    public function login(UserInterface $user):array{

        return $user->authenticate();

    }

}