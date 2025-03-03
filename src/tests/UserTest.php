<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Entity\User\UserTestDouble;
use App\Controller\Authenticate;

final class UserTest extends TestCase {

    public function testLoginFromNonRegistedEmail(): void{

        $user = new UserTestDouble();

        $user->email = "gabriel@email.com.br";
        $user->password = "12345";

        $this->assertEquals($user->isRegistered(), 0);

        $auth = new Authenticate;

        $login = $auth->login($user);

        $this->assertEquals($login["status"], 401);

    }


}