<?php
require_once __DIR__ . '/categories.php';
class Prodotto
{
    public $img;
    public $nome_prodotto;
    public $prezzo;
    public $categoria;
    public function  __construct(string $_img, string $_nome_prodotto, float  $_prezzo, string $_categoria)
    {
        $this->img = $_img;
        $this->nome_prodotto = $_nome_prodotto;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }
}
?>