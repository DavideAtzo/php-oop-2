<?php
require_once __DIR__ . '/categories.php';
require_once __DIR__. '/../traits/nomeProdotto.php';
class Prodotto
{    
    
    use Nome;

    private $categoria;
    private $prezzo;
    private $img;
    
    /**
     * __construct
     *
     * @param  string $_nome_prodotto
     * @param  Categoria $_categoria
     * @param  float $_prezzo
     * @param  string $_img
     * @return void
     */
    public function  __construct($_img, $_nome_prodotto, $_prezzo, $_categoria)
    {
        $this->img = $_img;
        $this->nome_prodotto = $_nome_prodotto;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
    }
    
    /**
     * get_img
     *  inserisce l'immagine prodotto
     * @return string
     */
    public function get_img(){
        return $this->img;
    }
    public function set_img($_img){
        $this->img = $_img;
    }
    
    /**
     * get_prezzo
     *  inserisce il prezzo prodotto
     * @return float
     */
    public function get_prezzo(){
        return $this->prezzo;
    }
    public function set_prezzo($_prezzo){
        $this->prezzo = $_prezzo;
    }
    
    /**
     * get_categoria
     * inserisce la categoria prodotto
     * @return stringa
     */
    public function get_categoria(){
        return $this->categoria;
    }
    public function set_categoria($_categoria){
        $this->categoria = $_categoria;
    }
}
