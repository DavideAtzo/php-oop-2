<?php

include_once __DIR__ . '/models/accessori.php';
include_once __DIR__ . '/models/prodotto.php';
include_once __DIR__ . '/models/cibo.php';
include_once __DIR__ . '/models/giocattoli.php';

$prodotti =  new Cibo('Sacchetto di crocchette', 4.99, 545, 'prosciutto, carote');

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