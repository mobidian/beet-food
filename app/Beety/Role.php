<?php namespace App\Beety;

/**
 * Class Role
 * @package App\Beety
 */
class Role
{
    /**
     * Roles constants
     */
    const ROLE_USER = 1;
    const ROLE_COOK = 2;
    const ROLE_ADMIN = 3;

    /**
     * Roles array
     *
     * @var array
     */
    public static $roles = [
        self::ROLE_USER => 'user',
        self::ROLE_COOK => 'cook',
        self::ROLE_ADMIN => 'admin'
    ];

    /**
     * @var array
     */
    public static $human = [
        self::ROLE_USER => 'User',
        self::ROLE_COOK => 'Cook',
        self::ROLE_ADMIN => 'Admin'
    ];
}