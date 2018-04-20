<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\CoolWord\Infrastructure;

use LaSalle\ChupiProject\Module\CoolWord\Domain\CoolWordRepository;
use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\Word;
use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\WordName;
use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\Words;

final class InMemoryCoolWordRepository implements CoolWordRepository
{
    private $words;

    public function __construct()
    {
        $this->words = new Words(
            new Word(new WordName('Chachi pistachi!')),
            new Word(new WordName('Esto mola mogollón, tío!')),
            new Word(new WordName('Mola mazo!')),
            new Word(new WordName('Eres mazo guay')),
            new Word(new WordName('Holiiiiii')),
            new Word(new WordName('Besiis'))
        );
    }

    public function all(): Words
    {
        return $this->words;
    }
}
