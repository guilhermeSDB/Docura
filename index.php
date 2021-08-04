<?php include_once "array.php" ?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="imagem/png" href="images/cupcake.png" />

    <!----------------------- Import CSS ----------------------->   

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Meus CSS  -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/home.css">  

    <!-- Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
    </style>
    <title>Doçaria - Home</title>
</head>
<body>
    <header>
        <div class="container-nav">
            <nav>
                <span id="logo" class="iconify" data-inline="false" data-icon="mdi:cupcake" style="color: #f95d82; font-size: 48px;"></span>
                    <a href="#">Home </a> 
                    <a href="#todos-produtos">Produtos</a> 
                    <a href="#">Quem Somos</a> 
                    <a href="#">Contato</a>
            </nav>
        </div>
        <hr class="separador">
    </header>

    <main>
        <div class="main-apresentation">
            <div class="apresentation-text">
                <h1 class="apresentation-title">
                    Para você 
                 </h1>
                 <h1 class="apresentation-subtitle">
                     Os melhores doces caseiros,
                 </h1>
                 <h1 class="apresentation-description">
                     temos varios opções de doces feitos em casa, para <br> voce, com os melhores ingredientes e os melhores preços.
                 </h1>
            </div>            
            <div class="apresentation-img">
                <img class="img" src="images/home-image.svg" alt="">
            </div>
            
        </div>

        <section id="Items">
                <span class="title-section">Nossas especialidades</span>
                <div class="icone-mouse">
                    <span id="icon-mouse" class="iconify" data-inline="false" data-icon="iconoir:mouse-scroll-wheel" style="color: #4d4d4d; font-size: 55px;"></span>   
                </div>
                 
            <div class="item1">
                <img src="images/item1-img.svg" alt="">
                <div class="item-text">
                    <h1 class="item-title">
                        Cupcakes
                    </h1>
                    <h1 class="item-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet purus eu nunc blandit, non dignissim velit laoreet. Quisque sodales non urna vitae tempor. Proin eget enim auctor, viverra lectus nec, semper justo. Etiam tristique hendrerit sapien sit amet facilisis. Vivamus pellentesque enim at tincidunt feugiat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam in turpis quis mauris fermentum maximus eu et ex. Suspendisse luctus quam arcu, at mattis quam feugiat eu.
                    </h1>
                </div>                         
            </div>
               
            <div class="item2">
                
                <div class="item-text">
                    <h1 class="item-title">
                        Bolos
                    </h1>
                    <h1 class="item-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum imperdiet purus eu nunc blandit, non dignissim velit laoreet. Quisque sodales non urna vitae tempor. Proin eget enim auctor, viverra lectus nec, semper justo. Etiam tristique hendrerit sapien sit amet facilisis. Vivamus pellentesque enim at tincidunt feugiat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam in turpis quis mauris fermentum maximus eu et ex. Suspendisse luctus quam arcu, at mattis quam feugiat eu.
                    </h1>
                </div>   
                <img src="images/item2-img.svg" alt="">            
            </div>
            <div class="item3">
                <img src="images/Item3-img.svg" alt="">  
                <div class="item-text">
                </div>   
                          
            </div>
        </section>

        <h1>
            
            <span class="title-section" style="padding:3rem">
                Todos os produtos
            </span>
            <hr class="separador" style="margin-bottom:3rem; width: 55vw;">
        </h1>


        <section id="todos-produtos">
            <div class="owl-carousel o wl-theme">
                <?php foreach($produtos as $item): ?>
                    <form action="produto.php" method="POST">
                        <div class="item">
                            <section class="section">
                                <div class="container">
                                    <div class="grid">
                                        <article class="card">
                                            <input type="hidden" name="id" value="<?= $item["id"] ?>">                                                
                                            </h2>
                                            <img name="img" class="card__image" src="<?= $item["imgPath"] ?>" />
                                            <div class="card__data">
                                                <div class="card__info">
                                                    <h2 name="nome" >
                                                        <?= $item['nome'] ?>
                                                    </h2>
                                                    <p name="descricao" >
                                                        <?= $item['descricao'] ?>
                                                    </p>
                                                </div>
                                                <h3 name="preco" class="card__price">
                                                    R$<?= $item['preco'] ?>
                                                </h3>
                                                <button type="submit" class="card__add">+</button>
                                            </div>
                                        </article>                            
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                <?php endforeach; ?> 
            </div>
        </section>

        

        <footer>
            <div id="footer">
                <div class="footer-paginas">
                    <h1>
                        Paginas
                    </h1>
                    <div class="text">
                        <a href="#">Home</a>
                        <a href="#">Quem Somos</a>
                        <a href="#">Contato</a>
                    </div>
                </div>
                <div class="footer-designby">
                    <h1>
                        Design by
                    </h1>
                    <div class="text">
                        <a href="#">Guilherme S</a>
                        <a href="#">UNICESUMAR</a>
                        <a href="#">RA: 20037859-5</a>
                    </div>
                </div>
                <div class="footer-contato">
                    <h1>
                        Contatos
                    </h1>
                    <div class="imgs">
                        <img src="images/github-fill.svg" alt="">
                        <img src="images/linkedin-icon.svg" alt="">
                        <img src="images/behance.svg" alt="">
                    </div>
                </div>
                <div class="footer-sociais">
                    <h1>
                        Redes Sociais
                    </h1>
                    <div class="imgs">
                        <img src="images/instagram-icon.svg" alt="Instagram">
                        <img src="images/facebook.svg" alt="Facebook">
                    </div>
                </div>                
            </div>   
            
        </footer>

    </main>

    <!-- Imports Javascripts -->

    <!-- Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <!-- Animações JS - SmooveJS -->
    <script src="js/jquery.smoove.js" ></script> 
    <script>
        $(".item1").smoove({
        offset  : '40%',
        moveX   : '200px',
        moveY   : '200px',});

        $(".item2").smoove({
        offset  : '40%',
        moveY   : '100px',
        moveX   : '-100px',});

        $(".item3").smoove({
        offset  : '40%',
        moveY   : '-200px',});
    </script>


    <script>
        $('.owl-carousel').owlCarousel({
            loop:false,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
      </script>
    
      
    
</body>
</html>
