<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\CoolWord\Domain\Value;

use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\Word;
use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\Words;

final class WordsStub
{
    public static function create(Word ...$words): Words
    {
        return new Words(...$words);
    }

    public static function allWordsInMemory(): Words
    {
        return self::create(
            WordStub::chachipistachi(),
            WordStub::molamogollon(),
            WordStub::molamazo(),
            WordStub::mazoguay(),
            WordStub::holiiiiii(),
            WordStub::besiis()
        );

    }

    public static function allWordNamesInMemory(): array
    {
        $words = self::allWordsInMemory();
        $wordNames = array();
        for ($i = 0; $i < $words->count(); $i++) {
            $wordNames[] = $words->get($i)->name()->value();
        }
        return $wordNames;
    }

    public static function withRandomThree(): Words
    {
        return self::create(
            WordStub::random(),
            WordStub::random(),
            WordStub::random()
        );
    }
}