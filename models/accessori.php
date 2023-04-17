<?php
require_once __DIR__ . '/products.php';
class Accessorio extends Prodotto
{
    public $materiale;
    public $dimensioni;
    public function __construct(string $_nome_prodotto, float  $_prezzo, string $_categoria, string $_materiale, int $_dimensioni)
    {
        parent::__construct($_nome_prodotto, $_prezzo, $_categoria);
        $this->materiale = $_materiale;
        $this->dimensioni = $_dimensioni;
    }

}
?>