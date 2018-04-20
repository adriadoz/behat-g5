<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\CoolWord\Domain;

use LaSalle\ChupiProject\Module\CoolWord\Domain\Value\Words;

interface CoolWordRepository
{
    function all(): Words;
}
