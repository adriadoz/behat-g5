<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\Color\Domain\Value;

final class Color
{
    private $name;

    public function __construct(ColorName $name)
    {
        $this->name = $name;
    }

    public function name(): ColorName
    {
        return $this->name;
    }

}