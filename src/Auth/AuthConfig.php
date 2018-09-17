<?php

namespace App\Auth;


class AuthConfig implements AuthConfigInterface
{
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
        $this->config[$userName] = ['password' => $password];
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
        return $this->config[$userName]['roles'] ?? [];
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
        if (!$this->hasUser($userName)) throw new UserNotFoundException();
        if (!isset($this->config[$userName]['roles'])) return;
        $this->config[$userName]['roles'] = array_filter($this->config[$userName]['roles'], function ($defined) use ($role) {
            return $defined !== $role;
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