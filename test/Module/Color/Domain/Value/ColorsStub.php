<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\Color\Domain\Value;

use LaSalle\ChupiProject\Module\Color\Domain\Value\Color;
use LaSalle\ChupiProject\Module\Color\Domain\Value\Colors;

final class ColorsStub
{
    public static function create(Color ...$colors): Colors
    {
        return new Colors(...$colors);
    }

    public static function allColorsInMemory(): Colors
    {
        return self::create(
            ColorStub::red(),
            ColorStub::cyan(),
            ColorStub::magenta(),
            ColorStub::green(),
            ColorStub::black(),
            ColorStub::yellow(),
            ColorStub::blue(),
            ColorStub::light_gray()
        );

    }

    public static function allColorNamesInMemory(): array
    {
        $colors = self::allColorsInMemory();
        $colorNames = array();
        for ($i = 0; $i < $colors->count(); $i++) {
            $colorNames[] = $colors->get($i)->name()->value();
        }
        return $colorNames;
    }

    public static function withRandomThree(): Colors
    {
        return self::create(
            ColorStub::random(),
            ColorStub::random(),
            ColorStub::random()
        );
    }
}