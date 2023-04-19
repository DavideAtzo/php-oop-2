<?php
require_once __DIR__ . '/products.php';
class Accessorio extends Prodotto
{
    private $materiale;
    private $dimensioni;
    public function __construct($_img, $_nome_prodotto, $_prezzo, $_categoria, $_materiale, $_dimensioni)
    {
        parent::__construct($_img, $_nome_prodotto, $_prezzo, $_categoria);
        $this->materiale = $_materiale;
        $this->dimensioni = $_dimensioni;
    }
    public function get_materiale()
    {
        return $this->materiale;
    }
    public function set_materiale($_materiale)
    {
        $this->materiale = $_materiale;
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