<?php

include_once __DIR__ . '/classi/generi.php';
include_once __DIR__ . '/classi/libro.php';
include_once __DIR__ . '/classi/audiolibro.php';
include_once __DIR__ . '/classi/vynil.php';
include_once __DIR__ . '/classi/salesAssistant.php';

$ranking

$generi = [
    'giallo' => new Generi('giallo', 'icon-font-awesome-giallo'),
    'horror' => new Generi('horror', 'icon-font-awesome-horror'),
    'techno' => new Generi('techno', 'icon-fa-techno')
];
var_dump($generi);

$prodotti = [
    new Libro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 250, 'flessibile'),
    new audioLibro('La scelta di Natan', 'Antonio Puccio', 23.40, $generi['giallo'], true, 'https://immagine-copertina.com', 120, 'spotify', 'https://spotify-libri.com'),
    new vynil('A.M. track', 'Robert Hood', 23.40, $generi['techno'], true, 'https://immagine-copertina.com', 30, 'spotify', 'https://spotify-libri.com', '4'),
    new salesAssistant('Tommaso Mangiagalli,', '27', 'immagine')
];

var_dump($prodotti);

foreach ($prodotti as $elem) {
    echo get_class($elem);
    echo "<br>";
}
