<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\CoolWord\Domain;

use LaSalle\ChupiProject\Test\Module\CoolWord\Domain\Value\WordsStub;
use PHPUnit\Framework\TestCase;

final class WordsTest extends TestCase
{
    /** @test */
    public function it_should_count_words()
    {
        $words = WordsStub::withRandomThree();

        $this->assertEquals(3, $words->count());
    }
}