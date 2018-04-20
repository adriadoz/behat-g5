<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\Color\Domain\Value;

use LaSalle\ChupiProject\Module\Color\Domain\Value\Color;
use LaSalle\ChupiProject\Module\Color\Domain\Value\ColorName;

final class ColorStub
{
    public static function create(ColorName $name): Color
    {
        return new Color($name);
    }

    public static function random(): Color
    {
        return self::create(ColorNameStub::random());
    }

    public static function red(): Color
    {
        return self::create(ColorNameStub::red());
    }

    public static function cyan(): Color
    {
        return self::create(ColorNameStub::cyan());
    }

    public static function magenta(): Color
    {
        return self::create(ColorNameStub::magenta());
    }

    public static function green(): Color
    {
        return self::create(ColorNameStub::green());
    }

    public static function black(): Color
    {
        return self::create(ColorNameStub::black());
    }

    public static function yellow(): Color
    {
        return self::create(ColorNameStub::yellow());
    }

    public static function blue(): Color
    {
        return self::create(ColorNameStub::blue());
    }

    public static function light_gray(): Color
    {
        return self::create(ColorNameStub::light_gray());
    }
}