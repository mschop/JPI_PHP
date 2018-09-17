<?php

namespace App\Auth;


interface AuthConfigInterface
{
    public function hasUser(string $userName): bool;

    /**
     * @param string $userName
     * @param string $password
     * @throws UserAlreadyExistsException
     */
    public function addUser(string $userName, string $password): void;

    /**
     * @param string $userName
     * @param string $password
     * @throws UserNotFoundException
     */
    public function updatePassword(string $userName, string $password): void;

    /**
     * @param string $userName
     * @throws UserNotFoundException
     */
    public function removeUser(string $userName): void;

    /**
     * @param string $userName
     * @return array
     * @throws UserNotFoundException
     */
    public function getRoles(string $userName): array;

    /**
     * @param string $userName
     * @param string $role
     * @throws UserNotFoundException
     */
    public function addRole(string $userName, string $role): void;

    /**
     * @param string $userName
     * @param array $roles
     * @throws UserNotFoundException
     */
    public function addRoles(string $userName, array $roles): void;

    /**
     * @param string $userName
     * @param string $role
     * @throws UserNotFoundException
     */
    public function removeRole(string $userName, string $role): void;

    /**
     * @return string[]
     */
    public function getAllUserNames(): array;

    /**
     * @return array
     */
    public function getConfig(): array;
}