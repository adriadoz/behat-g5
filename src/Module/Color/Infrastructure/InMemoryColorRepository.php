<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\Color\Infrastructure;

use LaSalle\ChupiProject\Module\Color\Domain\ColorRepository;
use LaSalle\ChupiProject\Module\Color\Domain\Value\Color;
use LaSalle\ChupiProject\Module\Color\Domain\Value\ColorName;
use LaSalle\ChupiProject\Module\Color\Domain\Value\Colors;

final class InMemoryColorRepository implements ColorRepository
{
    private $colors;

    public function __construct()
    {
        $this->colors = new Colors(
            new Color(new ColorName('red')),
            new Color(new ColorName('cyan')),
            new Color(new ColorName('magenta')),
            new Color(new ColorName('green')),
            new Color(new ColorName('black')),
            new Color(new ColorName('yellow')),
            new Color(new ColorName('blue')),
            new Color(new ColorName('light_gray'))
        );
    }

    public function all(): Colors
    {
        return $this->colors;
    }
}
