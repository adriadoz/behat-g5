<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\Color\Domain;

use LaSalle\ChupiProject\Module\Color\Domain\Value\Color;
use LaSalle\ChupiProject\Module\Color\Domain\Value\Colors;

final class RandomColorSearcher
{
    private $repository;

    public function __construct(ColorRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): string
    {
        $colors = $this->repository->all();
        $color = $this->random($colors);

        return $color->name()->value();
    }

    private function random(Colors $colors): Color
    {
        return $colors->get(mt_rand(0, $colors->count() - 1));
    }
}
