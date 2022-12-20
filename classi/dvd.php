<?php

include_once __DIR__ . '/prodotto.php';

class dvd extends prodotto
{
    public $durata;
    public $piattaforma;
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
        String $piattaforma,
        String $link,
        Int $copertina,
        String $tracce
    ) {
        $this->durata = $durata;
        $this->piattaforma = $piattaforma;
        $this->link = $link;
        $this->copertina = $copertina;
        $this->tracce = $tracce;
        parent::__construct($nome, $autore, $prezzo, $generi, $pubblicato, $immagine);
    }
}
