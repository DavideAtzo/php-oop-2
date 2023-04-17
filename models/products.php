<?php
class Prodotto
{
    public $nome_prodotto;
    public $prezzo;

    public function  __construct(string $_nome_prodotto, float  $_prezzo)
    {
        $this->nome_prodotto = $_nome_prodotto;
        $this->prezzo = $_prezzo;
    }
}

?>