<?php
require_once __DIR__ . '/products.php';
class Gioco extends Prodotto
{
    private $caratteristiche;
    private $dimensioni;
    public function __construct($_img, $_nome_prodotto, $_prezzo, $_categoria, $_caratteristiche, $_dimensioni)
    {
        parent::__construct($_img, $_nome_prodotto, $_prezzo, $_categoria);
        $this->caratteristiche = $_caratteristiche;
        $this->dimensioni = $_dimensioni;
    }

    public function get_caratteristiche()
    {
        return $this->caratteristiche;
    }
    public function set_caratteristiche($_caratteristiche)
    {
        $this->caratteristiche = $_caratteristiche;
    }

    public function get_dimensioni()
    {
        return $this->dimensioni;
    }
    public function set_dimensioni($_dimensioni)
    {
        $this->dimensioni = $_dimensioni;
    }
}

?>