<?php

require_once __DIR__ . '/products.php';
class Cibo extends Prodotto
{
    public $peso_netto;
    public $ingredienti;

    public function __construct($_img,  $_nome_prodotto,  $_prezzo, $_categoria, $_peso_netto, $_ingredienti)
    {
        parent::__construct($_img, $_nome_prodotto, $_prezzo, $_categoria);
        $this->peso_netto = $_peso_netto;
        $this->ingredienti  = $_ingredienti;
    }

    public function get_peso()
    {
        return $this->peso_netto;
    }

    public function set_peso($_prezzo)
    {
        $this->peso_netto = $_prezzo;
    }

    public function get_ingredienti()
    {
        return $this->ingredienti;
    }

    public function set_ingredienti($_ingredienti)
    {
        $this->ingredienti = $_ingredienti;
    }
}