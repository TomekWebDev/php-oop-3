<?php

include_once __DIR__ . '/../traits/ranking.php';

class salesAssistant
{

    use RatingOutOfTen;

    public $nome;
    public $eta;
    public $immagine;

    public function __construct(
        String $nome,
        String $eta,
        String $immagine

    ) {
        $this->nome = $nome;
        $this->eta = $eta;
        $this->immagine = $immagine;
    }
}
