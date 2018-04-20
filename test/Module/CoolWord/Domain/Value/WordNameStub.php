<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\CoolWord\Domain\Value;

use Faker\Factory;
use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\WordName;

final class WordNameStub
{
    public static function create(string $name): WordName
    {
        return new WordName($name);
    }

    public static function random(): WordName
    {
        return self::create(Factory::create()->word);
    }

    public static function chachipistachi(): WordName
    {
        return self::create("Chachi pistachi!");
    }

    public static function molamogollon(): WordName
    {
        return self::create("Esto mola mogollón, tío!");
    }

    public static function molamazo(): WordName
    {
        return self::create("Mola mazo!");
    }

    public static function mazoguay(): WordName
    {
        return self::create("Eres mazo guay");
    }

    public static function holiiiiii(): WordName
    {
        return self::create("Holiiiiii");
    }

    public static function besiis(): WordName
    {
        return self::create("Besiis");
    }
}