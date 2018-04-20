<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Test\Module\Color\Domain;

use LaSalle\ChupiProject\Module\Color\Domain\Value\Colors;
use LaSalle\ChupiProject\Test\Module\Color\Domain\Value\ColorStub;
use PHPUnit\Framework\TestCase;

final class ColorsTest extends TestCase
{
    /** @test */
    public function it_should_count_colors()
    {
        $color = ColorStub::random();
        $anotherColor = ColorStub::random();
        $yetAgainAnotherColor = ColorStub::random();

        $colors = new Colors($color, $anotherColor, $yetAgainAnotherColor);

        $this->assertEquals(3, $colors->count());
    }
}