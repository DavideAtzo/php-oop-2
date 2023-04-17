<?php
class Gioco
{
    public $nome_gioco;
    public $prezzo;
    public $caratteristiche;
    public $dimensioni;
    public function __construct(string $_nome_gioco, float  $_prezzo, string $_caratteristiche, int $_dimensioni)
    {
        $this->nome_gioco = $_nome_gioco;
        $this->prezzo = $_prezzo;
        $this->caratteristiche = $_caratteristiche;
        $this->dimensioni = $_dimensioni;
    }

}

$gioco = new Gioco('Osso di cotone', 4.50, 'Osso di cotone da masticare per la pulizia denti del tuo cane', 300);
var_dump($gioco);

?>