<?php

include_once __DIR__ . '/models/accessori.php';
include_once __DIR__ . '/models/categories.php';
include_once __DIR__ . '/models/products.php';
include_once __DIR__ . '/models/cibo.php';
include_once __DIR__ . '/models/giochi.php';

$crocchette =  new Cibo('Sacchetto di crocchette', 4.99, 'Cane', 545, 'prosciutto, carote');
$tonno =  new Cibo('Scatoletta di tonno', 3.49, 'gatto', 300, 'tonno, olio');
$collare =  new Accessorio('Collare in pelle', 4.99, 'Cane', 'Pelle', 20);
$voliera =  new Accessorio('Voliera per papagalli', 99.99, 'Uccelli', 'Metallo', 120);
$osso =  new Gioco('Osso giocattolo', 4.99, 'Cane', 'Giocattolo in gomma resistente ai morsi (non tossico', 50);
$prodotti = [];
array_push($prodotti, $crocchette, $tonno, $collare ,$voliera, $osso);
var_dump($prodotti);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boolshop</title>
</head>

<body>
</body>

</html>