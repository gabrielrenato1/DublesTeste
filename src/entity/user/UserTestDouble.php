<?php
namespace App\Entity\User;

use App\Entity\User\UserInterface;

class UserTestDouble implements UserInterface{

    public function isRegistered():bool{
        return 0;
    }

}