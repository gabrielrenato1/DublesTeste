<?php

namespace App\Entity\User;

use App\Entity\User\UserInterface;

class UserEntity implements UserInterface{

    public string $name;
    public int $age;
    public string $email;
    public string $password;

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

        return [
            "message" => "Não foi possível fazer login",
            "status" => 401,
        ];


    }

}