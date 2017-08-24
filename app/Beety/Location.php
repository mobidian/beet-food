<?php namespace App\Beety;

/**
 * Class Location
 * @package App\Beety
 */
class Location
{
    /**
     * Locations constants
     */
    const LOC_POLTAVA = 1;
    const LOC_KYIV = 2;
    const LOC_ODESSA = 3;

    /**
     * Locations array
     *
     * @var array
     */
    public static $locations = [
        self::LOC_POLTAVA => 'poltava',
        self::LOC_KYIV => 'kyiv',
        self::LOC_ODESSA => 'odessa'
    ];

    /**
     * @var array
     */
    public static $human = [
        self::LOC_POLTAVA => 'Poltava',
        self::LOC_KYIV => 'Kyiv',
        self::LOC_ODESSA => 'Odessa'
    ];
}