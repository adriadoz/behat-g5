<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\CoolWord\Domain;

use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\Word;
use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\Words;

final class RandomCoolWordSearcher
{
    private $repository;

    public function __construct(CoolWordRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(): string
    {
        $words = $this->repository->all();
        $word = $this->random($words);

        return $word->name()->value();
    }

    private function random(Words $words): Word
    {
        return $words->get(mt_rand(0, $words->count() - 1));
    }
}
