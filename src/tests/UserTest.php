<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Entity\User\UserTestDouble;
use App\Entity\User\UserEntity;
use App\Controller\Authenticate;

final class UserTest extends TestCase {

    public function testLoginFromNonRegistedEmail(): void{

        $user = new UserTestDouble();

        $user->email = "gabriel@email.com.br";
        $user->password = "12345";

        $this->assertEquals($user->isRegistered(), 0);

        $auth = new Authenticate;
        $userEntity = new UserEntity();

        $userEntity->email = "gabriel@email.com.br";
        $userEntity->password = "12345";

        $login = $auth->login($userEntity);

        $this->assertEquals($login["status"], 401);

    }

    public function testSaveLoginLogSucess():void{

        $userTest = new UserTestDouble();
        $userEntity = new UserEntity();

        $userData = $userTest->getData();

        $this->assertTrue($userEntity->logLogin($userData));

    }

    public function testLoginAttempts(){

        $userTest = new UserTestDouble();

        $userTest->email = "test@email.com";

        $userTest->authenticate();
        $userTest->authenticate();
        $userTest->authenticate();

        $this->assertEquals($userTest->loginAttemptsCount, 3);

    }


}