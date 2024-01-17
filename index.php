<?php
require_once __DIR__ . '/models/categoria.php';
require_once __DIR__ . '/models/prodotto.php';

var_dump($tuttiProdotti)

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Shop</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach ($tuttiProdotti as $prodotto) : ?>
                <div class="col-4 py-2">
                    <div class="card">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->get_Nome() ?></h5>
                            <p class="card-text">Categoria: <?php echo $prodotto->get_Tipo() . ' ' . $prodotto->get_Categoria()->getIcona() ?></p>
                            <h5 class="card-text ">Prezzo: <?php echo $prodotto->get_Prezzo() ?> </h5>
                            <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>



</body>

</html>