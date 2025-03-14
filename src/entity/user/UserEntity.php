<?php

namespace App\Entity\User;

use App\Entity\User\UserInterface;

class UserEntity implements UserInterface{

    public string $name;
    public int $age;
    public string $email;
    public string $password;
    public $loginAttemptsCount = 0;

    public function isRegistered():bool{

        return $this->email == "correto@email.com.br";

    }

    public function authenticate():array{

        if($this->email == "correto@email.com.br" && $this->password == "12345"){
            
            return [
                "token" => base64_encode(random_bytes(30)),
                "expired_at" => date("Y-m-d h:i:s", strtotime( "+5 hours")),
                "email" => $this->email,
                "status" => 200,
            ];

        }

        $this->loginAttemptsCount++;

        return [
            "message" => "Não foi possível fazer login",
            "status" => 401,
        ];


    }

    public function getData():array{

        return [
            "name" => $this->name,
            "age" => $this->age,
            "email" => $this->email,
        ];

    }

    public function logLogin($login):bool{

        if(isset($login['email'])){
            //Logic..
            return true;
        }

        return false;

    }

    public function isBlocked():bool{
        return $this->loginAttemptsCount >= 3;
    }

}