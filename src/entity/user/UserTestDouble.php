<?php
namespace App\Entity\User;

use App\Entity\User\UserInterface;

class UserTestDouble implements UserInterface{

    public function isRegistered():bool{
        return 0;
    }

    public function authenticate():array{

        return [
            "token" => base64_encode(random_bytes(30)),
            "expired_at" => date("Y-m-d h:i:s", strtotime( "+5 hours")),
            "email" => "test@email.com.br",
            "status" => 200,
        ];

    }

    public function getData():array{

        return [
            "name" => "Teste Silva",
            "age" => 15,
            "email" => "teste@email.com.br",
        ];

    }



}