<?php
require_once __DIR__ . 'products.php';
class Cibo extends Prodotto
{
    public $peso_netto;
    public $ingredienti;
    public function __construct(string $_nome_cibo, float  $_prezzo, int $_peso_netto, string $_ingredienti)
    {
        parent::__construct($_nome_cibo, $_prezzo);
        $this->peso_netto = $_peso_netto;
        $this->ingredienti = $_ingredienti;
    }

}

?>