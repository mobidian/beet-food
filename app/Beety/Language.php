<?php namespace App\Beety;

/**
 * Class Language
 * @package App\Beety
 */
class Language
{
    /**
     * Language constants
     */
    const LANG_RU = 1;
    const LANG_UA = 2;
    const LANG_EN = 3;

    /**
     * Language array
     *
     * @var array
     */
    public static $langs = [
        self::LANG_RU => 'ru',
        self::LANG_UA => 'ua',
        self::LANG_EN => 'en'
    ];

    /**
     * @var array
     */
    public static $human = [
        self::LANG_RU => 'Russian',
        self::LANG_UA => 'Ukrainian',
        self::LANG_EN => 'English'
    ];

    /**
     * @param $id
     * @return mixed
     */
    public static function getLangByKey($id)
    {
        return self::$langs[$id];
    }
}