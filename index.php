<?php

include_once __DIR__ . '/database.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boolshop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="title my-3">
                <h1>Prodotti disponibili:</h1>
            </div>
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-4 g-3">
                    <div class="card flex-column" style="width: 18rem;">
                        <div id="img-box" class="d-flex justify-content-center mt-2">
                            <img src="<?php echo $prodotto->get_img() ?>" alt="<?php echo $prodotto->get_img() ?>">
                        </div>
                        <div class="card-body py-2">
                            <h4 class="card-title"><?php echo $prodotto->get_nome() ?> </h4>
                            <h5 class="card-subtitle text-body-secondary my-2"><?php echo $prodotto->get_categoria()->get_icona() ?> <?php echo $prodotto->get_categoria()->get_nome() ?></h5>
                            <p>Prezzo: <?php echo $prodotto->get_prezzo() ?> €</p>
                            <?php if (method_exists($prodotto, 'get_peso')) : ?>
                                <p class="card-text">Peso netto: <?php echo $prodotto->get_peso() ?>g</p>
                            <?php endif; ?>
                            <?php if (method_exists($prodotto, 'get_ingredienti')) : ?>
                                <p>Ingredienti: <?php echo $prodotto->get_ingredienti() ?></p>
                            <?php endif; ?>
                            <?php if (method_exists($prodotto, 'get_materiale')) : ?>
                                <p> Materiale: <?php echo $prodotto->get_materiale() ?></p>
                            <?php endif; ?>
                            <?php if (method_exists($prodotto, 'get_dimensioni')) : ?>
                                <p> Dimensioni: <?php echo $prodotto->get_dimensioni() ?> cm </p>
                            <?php endif; ?>
                            <?php if (method_exists($prodotto, 'get_caratteristiche')) : ?>
                                <p> Caratteristiche: <?php echo $prodotto->get_caratteristiche() ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>