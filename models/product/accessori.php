<?php
class Accessorio
{
    public $nome_prodotto;
    public $prezzo;
    public $materiale;
    public $dimensioni;
    public function __construct(string $_nome_prodotto, float  $_prezzo, string $_materiale, string $_dimensioni)
    {
        $this->nome_prodotto = $_nome_prodotto;
        $this->prezzo = $_prezzo;
        $this->materiale = $_materiale;
        $this->dimensioni = $_dimensioni;
    }

}

$accessorio = new Accessorio('collare', 4.50, 'Pelle', '20 cm');
var_dump($accessorio);

?>