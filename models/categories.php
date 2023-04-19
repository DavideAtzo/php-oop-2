<?php
class Categorie
{
  private $nome;
  private $icona;

  public function __construct($_nome, $_icona)
  {
    $this->nome = $_nome;
    $this->icona = $_icona;
  }

  public function get_nome()
  {
    return $this->nome;
  }
  public function set_nome($_nome)
  {
    $this->nome = $_nome;
  }

  public function get_icona()
  {
    return $this->icona;
  }
  public function set_icona($_icona)
  {
    $this->icona = $_icona;
  }

  public function get_type()
  {
    return "{$this->icona} {$this->nome}";
  }
}

