<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\Color\Domain\Value;

final class Colors
{
    private $colors;

    public function __construct(Color ...$colors)
    {
        $this->colors = $colors;
    }

    public function count(): int
    {
        return count($this->colors);
    }

    public function get(int $index): Color
    {
        return $this->colors[$index];
    }

}