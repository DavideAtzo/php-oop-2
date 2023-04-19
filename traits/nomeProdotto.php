<?php

trait Nome 
{
    private $nome_prodotto;

    /**
     * get_nome
     *  inserisce il nome prodotto
     * @return string
     */
    public function get_nome(){
        return $this->nome_prodotto;
    }
    public function set_nome($_nome_prodotto){
        $this->nome_prodotto = $_nome_prodotto;
    }
}