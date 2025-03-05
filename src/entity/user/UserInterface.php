<?php
namespace App\Entity\User;

interface UserInterface{

    public function isRegistered():bool;

    public function authenticate():array;

    public function getData():array;

    public function isBlocked():bool;

}