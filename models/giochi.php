<?php
require_once __DIR__ . '/products.php';
class Gioco extends Prodotto
{
    public $caratteristiche;
    public $dimensioni;
    public function __construct(string $_nome_prodotto, float  $_prezzo, string $_caratteristiche, int $_dimensioni)
    {
        parent::__construct($_nome_prodotto, $_prezzo);
        $this->caratteristiche = $_caratteristiche;
        $this->dimensioni = $_dimensioni;
    }

}

?>