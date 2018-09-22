<?php

namespace App\Auth;


use function Functional\filter;
use function Functional\map;

class AuthConfig implements AuthConfigInterface
{
    /**
     * All user need the role ROLE_API_CLIENT for being able to bypass the firewall
     */
    const ROLE_API_CLIENT = 'ROLE_API_CLIENT';

    protected $config;

    /**
     * AuthConfig constructor.
     * @param $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function hasUser(string $userName): bool
    {
        return isset($this->config[$userName]);
    }

    public function addUser(string $userName, string $password): void
    {
        if ($this->hasUser($userName)) throw new UserAlreadyExistsException();
        $this->config[$userName] = [
            'password' => $password,
            'roles' => [static::ROLE_API_CLIENT]
        ];
    }

    public function removeUser(string $userName): void
    {
        if (!$this->hasUser($userName)) throw new UserNotFoundException();
        unset($this->config[$userName]);
    }

    public function updatePassword(string $userName, string $password): void
    {
        if (!$this->hasUser($userName)) throw new UserNotFoundException();
        $this->config[$userName]['password'] = $password;
    }

    public function getRoles(string $userName): array
    {
        if (!$this->hasUser($userName)) throw new UserNotFoundException();
        return filter($this->config[$userName]['roles'] ?? [], function(string $role) {
            return $role !== static::ROLE_API_CLIENT;
        });
    }

    public function addRole(string $userName, string $role): void
    {
        $this->addRoles($userName, [$role]);
    }

    public function addRoles(string $userName, array $roles): void
    {
        if (!$this->hasUser($userName)) throw new UserNotFoundException();
        $this->config[$userName]['roles'] = array_unique(array_merge($this->config[$userName]['roles'] ?? [], $roles));
    }

    public function removeRole(string $userName, string $role): void
    {
        $this->removeRoles($userName, [$role]);
    }

    public function removeRoles(string $userName, array $roles): void
    {
        if (!$this->hasUser($userName)) throw new UserNotFoundException();
        $roles = filter($roles, function(string $role) {
            return $role !== static::ROLE_API_CLIENT;
        });
        $roles = map($roles, function(string $role) {
            return "ROLE_$role";
        });
        $this->config[$userName]['roles'] = filter($this->config[$userName]['roles'], function(string $role) use ($roles) {
            return !in_array($role, $roles);
        });
    }

    public function getAllUserNames(): array
    {
        $result = [];
        foreach ($this->config as $key => $value) {
            $result[] = $key;
        }
        return $result;
    }

    public function getConfig(): array
    {
        return $this->config;
    }
}