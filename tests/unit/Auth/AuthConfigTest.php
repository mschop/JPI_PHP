<?php
namespace App\Tests\Auth;

use App\Auth\AuthConfig;
use App\Auth\UserAlreadyExistsException;
use App\Auth\UserNotFoundException;

class AuthConfigTest extends \Codeception\Test\Unit
{
    /**
     * @var \App\Tests\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function test_unchanged()
    {
        $configArr = [
            'mschop' => [
                'password' => 'test',
                'roles' => 'ROLE_API_CLIENT',
            ],
        ];
        $authConfig = new AuthConfig($configArr);
        $this->assertEquals($configArr, $authConfig->getConfig());
    }

    public function test()
    {
        $configArr = [
            'mschop' => [
                'password' => 'test',
                'roles' => 'ROLE_API_CLIENT',
            ],
        ];
        $authConfig = new AuthConfig($configArr);

        $authConfig->addUser('some_client', 'Hello Again');
        $this->assertTrue($authConfig->hasUser('some_client'));
        $authConfig->removeUser('some_client');
        $this->assertFalse($authConfig->hasUser('some_client'));

        $authConfig->updatePassword('mschop', 'test123');
        $this->assertEquals('test123', $authConfig->getConfig()['mschop']['password']);
    }

    public function test_addUser_userAlreadyExists_throws()
    {
        $authConfig = new AuthConfig([]);
        $authConfig->addUser('mschop', 'test');
        $this->setExpectedException(UserAlreadyExistsException::class);
        $authConfig->addUser('mschop', 'test');
    }

    public function test_removeUser_userNotDefined_throws()
    {
        $authConfig = new AuthConfig([]);
        $this->setExpectedException(UserNotFoundException::class);
        $authConfig->removeUser('mschop');
    }

    public function test_addRole_userNotDefined_throws()
    {
        $authConfig = new AuthConfig([]);
        $this->setExpectedException(UserNotFoundException::class);
        $authConfig->addRole('mschop', 'ROLE_API_CLIENT');
    }

    public function test_removeRole_userNotDefined_throws()
    {
        $authConfig = new AuthConfig([]);
        $this->setExpectedException(UserNotFoundException::class);
        $authConfig->removeRole('mschop', 'ROLE_API_CLIENT');
    }

    public function test_changePassword_userNotDefined_throws()
    {
        $authConfig = new AuthConfig([]);
        $this->setExpectedException(UserNotFoundException::class);
        $authConfig->updatePassword('mschop', '');
    }
}