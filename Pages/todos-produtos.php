<?php require_once "../dados/array.php" ;?>

<head>
<link rel="stylesheet" href="css/todos-produtos.css">
</head>
        <section>
            <div class="products-title-section">
                Todos os produtos
            </div>
            <div class="products-section-products">
                <div class="product_header cupcakes-header">
                    <h1 class="product_title">Cupcakes</h1>
                </div>                
                    <form action="/Pages/produto.php" method="POST">
                        <div class="owl-carousel">
                        <?php foreach($produtos as $item): ?>
                            <div class="item"> 
                                <div class="product_products">
                                    <div class="product_card">
                                        <div class="card_image" style="background: url('<?= $item['imgPath'] ?>') no-repeat center center/cover;">
                                        </div>
                                        <div class="card_item">
                                            <div class="card_title">
                                                <h4><?= $item['nome'] ?></h4>
                                                <p>Gelados e Saborosos</p>
                                            </div>
                                            <div class="card_price cupkcakes">
                                                <p>R$<?= $item['preco']?></p>
                                                <div class="rating">
                                                    <div class="cupkcakes-rating"></div>
                                                    <div class="cupkcakes-rating"></div>
                                                    <div class="cupkcakes-rating"></div>
                                                    <div class="cupkcakes-rating"></div>
                                                </div>
                                            </div>                                
                                        </div>                            
                                    </div>
                                </div>
                            </div>  
                        <?php endforeach; ?>      
                    </div>
                </form>                
            </div>
            <div class="products-section-products">
                <div class="product_header bolos-header">
                    <h1 class="product_title">Bolos</h1>
                </div>                
                    <form action="/Pages/produto.php" method="POST">
                        <div class="owl-carousel">
                        <?php foreach($produtos as $item): ?>
                            <div class="item"> 
                                <div class="product_products">
                                    <div class="product_card">
                                        <div class="card_image" style="background: url('../images/814d386f5c4138112e5fa70430be6661_L.jpg') no-repeat center center/cover;">
                                        </div>
                                        <div class="card_item">
                                            <div class="card_title">
                                                <h4>Cupcake - Morango</h4>
                                                <p>Gelados e Saborosos</p>
                                            </div>
                                            <div class="card_price bolos">
                                                <p>R$5</p>
                                                <div class="rating">
                                                    <div class="bolos-rating"></div>
                                                    <div class="bolos-rating"></div>
                                                    <div class="bolos-rating"></div>
                                                    <div class="bolos-rating"></div>
                                                </div>
                                            </div>                                
                                        </div>                            
                                    </div>
                                </div>
                            </div>  
                        <?php endforeach; ?>      
                    </div>
                </form>                
            </div>
            <div class="products-section-products">
                <div class="product_header geleias-header">
                    <h1 class="product_title">Geleias</h1>
                </div>                
                    <form action="/Pages/produto.php" method="POST">
                        <div class="owl-carousel">
                        <?php foreach($produtos as $item): ?>
                            <div class="item"> 
                                <div class="product_products">
                                    <div class="product_card">
                                        <div class="card_image" style="background: url('../images/receita-de-geleia-de-laranja-1.jpg') no-repeat center center/cover;">
                                        </div>
                                        <div class="card_item">
                                            <div class="card_title">
                                                <h4>Cupcake - Morango</h4>
                                                <p>Gelados e Saborosos</p>
                                            </div>
                                            <div class="card_price geleias">
                                                <p class="">R$5</p>
                                                <div class="rating">
                                                    <div class="geleias-rating"></div>
                                                    <div class="geleias-rating"></div>
                                                    <div class="geleias-rating"></div>
                                                    <div class="geleias-rating"></div>
                                                </div>
                                            </div>                                
                                        </div>                            
                                    </div>
                                </div>
                            </div>  
                        <?php endforeach; ?>      
                    </div>
                </form>                
            </div>
        </section>

    <!-- Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <script src="js/jquery.smoove.js" ></script> 
        
    <script>
        $('.owl-carousel').owlCarousel({
            loop:false,
            autoWidth:true,
            items:4,
            nav:false,
            margin:10,
            autoHeight:true,
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
        




    

        
    
