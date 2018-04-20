<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\Color\Domain\Value;

use Faker\Factory;
use LaSalle\ChupiProject\Module\Color\Domain\Value\ColorName;

final class ColorNameStub
{
    public static function create(string $name): ColorName
    {
        return new ColorName($name);
    }

    public static function random(): ColorName
    {
        return self::create(Factory::create()->colorName);
    }

    public static function red(): ColorName
    {
        return self::create("red");
    }

    public static function cyan(): ColorName
    {
        return self::create("cyan");
    }

    public static function magenta(): ColorName
    {
        return self::create("magenta");
    }

    public static function green(): ColorName
    {
        return self::create("green");
    }

    public static function black(): ColorName
    {
        return self::create("black");
    }

    public static function yellow(): ColorName
    {
        return self::create("yellow");
    }

    public static function blue(): ColorName
    {
        return self::create("blue");
    }

    public static function light_gray(): ColorName
    {
        return self::create("light_gray");
    }

}