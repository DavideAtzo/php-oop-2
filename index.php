<?php

include_once __DIR__ . '/models/accessori.php';
include_once __DIR__ . '/models/categories.php';
include_once __DIR__ . '/models/products.php';
include_once __DIR__ . '/models/cibo.php';
include_once __DIR__ . '/models/giochi.php';

$crocchette =  new Cibo('img/Crocchette.jpg', 'Sacchetto di crocchette', 4.99, 'Cane', 545, 'prosciutto, carote');
$tonno =  new Cibo('img/Tonno.jpg', 'Scatoletta di tonno', 3.49, 'gatto', 300, 'tonno, olio');
$collare =  new Accessorio('img/Collare.jpg', 'Collare in pelle', 4.99, 'Cane', 'Pelle', 20);
$voliera =  new Accessorio('img/Voliera.png', 'Voliera per papagalli', 99.99, 'Uccelli', 'Metallo', 120);
$osso =  new Gioco('img/Osso.jpg', 'Osso giocattolo', 4.99, 'Cane', 'Giocattolo in gomma resistente ai morsi (non tossico', 50);
$prodotti = [];
array_push($prodotti, $crocchette, $tonno, $collare, $voliera, $osso);
var_dump($prodotti);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boolshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="card">
                    <div class="img-box">
                        <img src="<?php echo $prodotto->img ?>">
                    </div>
                    <?php foreach ($prodotto as $key => $prodotto) : ?>
                        <p><?php echo $prodotto ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>