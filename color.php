<?php

require 'vendor/autoload.php';

use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;
use LaSalle\ChupiProject\Module\Color\Infrastructure\InMemoryColorRepository;

$randomColorSearcher = new RandomColorSearcher(new InMemoryColorRepository());
$randomColor = $randomColorSearcher();
$jsonColor = json_encode(array('valor' => $randomColor));
header("Content-Type: text/json");
header("Content-Description: Color Found");

echo $jsonColor;
