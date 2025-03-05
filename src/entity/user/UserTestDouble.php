<?php
namespace App\Entity\User;

use App\Entity\User\UserInterface;

class UserTestDouble implements UserInterface{

    public $loginAttemptsCount = 0;

    public function isRegistered():bool{
        return 0;
    }

    public function authenticate():array{

        if($this->email != "correto@email.com.br"){
            
           $this->loginAttemptsCount++;

           return [
                "message" => "Não foi possível fazer login",
                "status" => 401,
            ];

        }

    }

    public function getData():array{

        return [
            "name" => "Teste Silva",
            "age" => 15,
            "email" => "teste@email.com.br",
        ];

    }

        
    public function isBlocked():bool{
        return $this->loginAttemptsCount >= 3;
    }


}