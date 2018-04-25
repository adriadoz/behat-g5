<?php

declare(strict_types = 1);

include '../../vendor/autoload.php';

use LaSalle\ChupiProject\Module\Color\Domain\RandomColorSearcher;
use LaSalle\ChupiProject\Module\Color\Infrastructure\InMemoryColorRepository;
use LaSalle\ChupiProject\Module\CoolWord\Domain\RandomCoolWordSearcher;
use LaSalle\ChupiProject\Module\CoolWord\Infrastructure\InMemoryCoolWordRepository;

if (isset($_GET['valor'])) {
    if ($_GET['valor'] === 'color') {
        $randomColorSearcher = new RandomColorSearcher(new InMemoryColorRepository());
        $randomColor = $randomColorSearcher();
        $jsonColor = json_encode(array('valor' => $randomColor));
        header("Content-Type: text/json");
        header("Content-Description: Color Found");
        echo $jsonColor;

    } else if ($_GET['valor'] === 'word') {
        $randomWordSearcher = new RandomCoolWordSearcher(new InMemoryCoolWordRepository());
        $randomWord = $randomWordSearcher();
        $jsonWord = json_encode(array('valor' => $randomWord));
        header("Content-Type: text/json");
        header("Content-Description: Word Found");
        echo $jsonWord;

    } else {
        http_response_code(404);
        die();
    }
} else {
    die(404);
}

