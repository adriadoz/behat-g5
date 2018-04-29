<?php

require 'vendor/autoload.php';

use LaSalle\ChupiProject\Module\CoolWord\Domain\RandomCoolWordSearcher;
use LaSalle\ChupiProject\Module\CoolWord\Infrastructure\InMemoryCoolWordRepository;

$randomWordSearcher = new RandomCoolWordSearcher(new InMemoryCoolWordRepository());
$randomWord = $randomWordSearcher();
$jsonWord = json_encode(array('valor' => $randomWord));
header("Content-Type: text/json");
header("Content-Description: Word Found");

echo $jsonWord;