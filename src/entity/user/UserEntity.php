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

}