<?php
class Cibo
{
    public $nome_cibo;
    public $prezzo;
    public $peso_netto;
    public $ingredienti;
    public function __construct(string $_nome_cibo, float  $_prezzo, int $_peso_netto, string $_ingredienti)
    {
        $this->nome_cibo = $_nome_cibo;
        $this->prezzo = $_prezzo;
        $this->peso_netto = $_peso_netto;
        $this->ingredienti = $_ingredienti;
    }

}

$cibo = new Cibo('Sacchetto di crocchette', 4.50, 600, 'carote, pollo');
var_dump($cibo);

?>