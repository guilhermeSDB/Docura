<?php 

include_once "array.php";

$id = $_POST['id'];

// echo '<br>';
// echo '<pre>';
// print_r($produtos[$id]);
// echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="images/cupcake.png" />
    <title>Produto</title>

    <link rel="stylesheet" href="css/produto.css">

</head>
<body>
<html>

<head>
    <title>card</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
</head>

<body>
    <a href="index.php#todos-produtos">Voltar</a>
    <div class="card">
        <div class="card-image-container">
            <img src="<?= $produtos[$id]['imgPath'] ?>" alt="" class="card-image">
        </div>

        <div class="card-info-container">
            <h1 class="card-info-heading"><?= $produtos[$id]['nome'] ?><span class="material-icons dish-type">
                adjust
                </span></h1>
            <br/>
            <p class="card-info-para">
            <?= $produtos[$id]['descricao'] ?>
            </p>
            <br/>

            <div class="card-stats-container">
                <div class="card-stats">
                    <h1 class="stats-heading">
                        Calorias
                    </h1>
                    <p class="stats-para">
                        289
                    </p>
                </div>
                <div class="card-stats">
                    <h1 class="stats-heading">
                        Gorduras
                    </h1>
                    <p class="stats-para">
                        21g
                    </p>
                </div>
                <div class="card-stats">
                    <h1 class="stats-heading">
                        Carbs
                    </h1>
                    <p class="stats-para">
                        2g
                    </p>
                </div>

                <div class="card-stats">
                    <h1 class="stats-heading">
                        Proteinas
                    </h1>
                    <p class="stats-para">
                        28g
                    </p>
                </div>

                
            </div>
            <br/>
            <button class="btn"><span class="material-icons">
                add_shopping_cart
                </span></button>
        </div>

    </div>    
</body>

</html>
</body>
</html>