<?php

declare(strict_types=1);

namespace LaSalle\ChupiProject\Module\Color\Domain;

use LaSalle\ChupiProject\Module\Color\Domain\Value\Colors;

interface ColorRepository
{
    function all(): Colors;
}
