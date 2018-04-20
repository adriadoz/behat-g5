<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\CoolWord\Domain\Value;

use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\Word;
use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\WordName;

final class WordStub
{
    public static function create(WordName $name): Word
    {
        return new Word($name);
    }

    public static function random(): Word
    {
        return self::create(WordNameStub::random());
    }

    public static function chachipistachi(): Word
    {
        return self::create(WordNameStub::chachipistachi());
    }

    public static function molamogollon(): Word
    {
        return self::create(WordNameStub::molamogollon());
    }

    public static function molamazo(): Word
    {
        return self::create(WordNameStub::molamazo());
    }

    public static function mazoguay(): Word
    {
        return self::create(WordNameStub::mazoguay());
    }

    public static function holiiiiii(): Word
    {
        return self::create(WordNameStub::holiiiiii());
    }

    public static function besiis(): Word
    {
        return self::create(WordNameStub::besiis());
    }
}