<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\CoolWord\Domain\Value;

final class Word
{
    private $name;

    public function __construct(WordName $name)
    {
        $this->name = $name;
    }

    public function name(): WordName
    {
        return $this->name;
    }
}