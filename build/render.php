<?php

use Louis25\Scrappingrenduiim\Scrapping;

require_once __DIR__ . '/../vendor/autoload.php';

$api = new Scrapping();
$mangaList = $api->getMangaList();

// Afficher la liste de mangas
foreach ($mangaList as $mangaTitle) {
    echo $mangaTitle . "\n";
    echo "<br>";
}

