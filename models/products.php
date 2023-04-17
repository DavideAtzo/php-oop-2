<?php
require_once __DIR__ . '/Categories.php';
class Prodotto
{
    public $nome_prodotto;
    public $prezzo;
    public $categoria;
    public function  __construct(string $_nome_prodotto, float  $_prezzo, string $_categoria)
    {
        $this->nome_prodotto = $_nome_prodotto;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }
}
?>