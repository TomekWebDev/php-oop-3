<?php

include_once __DIR__ . '/prodotto.php';
include_once __DIR__ . '/../traits/ranking.php';

class vynil extends prodotto
{

    use RatingOutOfTen;

    public $durata;
    public $link;
    public $copertina;
    public $tracce;

    public function __construct(
        String $nome,
        String $autore,
        Float $prezzo,
        Generi $generi,
        Bool $pubblicato,
        String $immagine,

        Int $durata,
        String $link,
        String $copertina,
        String $tracce
    ) {
        $this->durata = $durata;
        $this->link = $link;
        $this->copertina = $copertina;
        $this->tracce = $tracce;
        parent::__construct($nome, $autore, $prezzo, $generi, $pubblicato, $immagine);
    }
}
