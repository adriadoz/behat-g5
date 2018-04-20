<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\CoolWord\Domain\Value;

final class Words
{
    private $words;

    public function __construct(Word ...$words)
    {
        $this->words = $words;
    }

    public function count(): int
    {
        return count($this->words);
    }

    public function get(int $index): Word
    {
        return $this->words[$index];
    }
}