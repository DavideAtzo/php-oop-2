<?php

include_once __DIR__ . '/models/accessori.php';
include_once __DIR__ . '/models/categories.php';
include_once __DIR__ . '/models/products.php';
include_once __DIR__ . '/models/cibo.php';
include_once __DIR__ . '/models/giochi.php';

$categoria_cane = new Categorie('Cane', '<i class="fa-solid fa-dog"></i>');
$categoria_gatto = new Categorie('Gatto', '<i class="fa-solid fa-cat"></i>');
$categoria_uccello = new Categorie('Uccello', '<i class="fa-solid fa-dove"></i>');
$categoria_pesce = new Categorie('Pesce', '<i class="fa-solid fa-fish"></i>');


$crocchette = new Cibo('img/Crocchette.jpg', 'Sacchetto di crocchette', 4.99, $categoria_cane, 545, 'prosciutto, carote');
$tonno =  new Cibo('img/Tonno.jpeg', 'Scatoletta di tonno', 3.49, $categoria_gatto, 300, 'tonno, olio');
$collare = new Accessorio('img/Collare.jpg', 'Collare in pelle', 4.99, $categoria_pesce, 'Pelle', 20);
$voliera =  new Accessorio('img/Voliera.png', 'Voliera per papagalli', 99.99, $categoria_uccello, 'Metallo', 120);
$osso = new Gioco('img/Osso.jpg', 'Osso giocattolo', 4.99, $categoria_gatto, 'Giocattolo in gomma resistente ai morsi (non tossico)', '50');

$prodotti = [
    $crocchette,
    $tonno,
    $collare,
    $voliera,
    $osso

];
// var_dump($prodotti);
