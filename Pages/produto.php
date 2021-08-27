<?php require_once "../dados/array-produtos.php";

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$id = $_POST['id'];
$tablename = $_POST['array'];


if($tablename == '$cupcakes'){

    $nome = $cupcakes[$id]['nome'];   
    $preco = $cupcakes[$id]['preco'];   
    $img = $cupcakes[$id]['imgPath'];   
    $descricao = $cupcakes[$id]['descricao'];   
}else if($tablename == '$bolos'){
    $nome = $bolos[$id]['nome'];   
    $preco = $bolos[$id]['preco'];   
    $img = $bolos[$id]['imgPath'];  
    $descricao = $bolos[$id]['descricao'];   
}else if($tablename == '$geleias'){
    $nome = $geleias[$id]['nome'];   
    $preco = $geleias[$id]['preco'];   
    $img = $geleias[$id]['imgPath'];  
    $descricao = $geleias[$id]['descricao'];   
}
     

?>


<head>    
    <!-- Meus CSS  -->
    <link rel="stylesheet" href="../css/global.css">  
    <link rel="stylesheet" href="../css/home.css">   
    <link rel="stylesheet" href="../css/todos-produtos.css"> 
    <link rel="stylesheet" href="../css/produto.css"> 
</head>

    <section>
        <div class="produto-especifico">
            <div class="produto_image" style="background: url('<?= $img ?>')no-repeat center center/cover;" >
            </div>
            <div class="produto_item">
                <div class="produto_topo"> 
                    <div class="produto_title">
                    <h1><?= $nome ?></h1>                   
                    </div>
                    <div class="produto_preco">
                        <p>R$<?= $preco ?></p>
                    </div>                    
                </div>
                <div class="rating">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                </div>
                <div class="produto_description">
                    <p>
                    <?= $descricao ?>
                    </p>
                </div>
                
            </div>
        </div>
    </section>

    
