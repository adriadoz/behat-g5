<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\CoolWord\Domain\Value;

final class WordName
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }
}