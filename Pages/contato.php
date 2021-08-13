<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="imagem/png" href="images/cupcake.png" />

    <!----------------------- Import CSS ----------------------->   
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
    
    <!-- Meus CSS  -->
    <link rel="stylesheet" href="../css/global.css">  
    <link rel="stylesheet" href="../css/home.css">   
    <link rel="stylesheet" href="../css/contato.css"> 

     <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
     
    <title>Doçaria - Home</title>
</head>
<body>
    <header>
        <div class="container-nav">
            <nav>
                <span id="logo" class="iconify" data-inline="false" data-icon="mdi:cupcake" style="color: #f95d82; font-size: 48px;"></span>
                    <a id="Home" href="../index.php">Home</a> 
                    <a id="Produtos" href="../index.php">Produtos</a> 
                    <a id="Quem-somos" href="../index.php">Quem Somos</a> 
                    <a id="Contato" href="../index.php">Contato</a>
            </nav>
        </div>
        <hr class="separador">
    </header>
    <main id="main">  

        <section>
            <div class="contato_section">
                <h2>Contate-nos</h2>
                <div class="contato_container">
                <div id="map"></div>
                    <div class="card_contato">
                        <div class="card-informations">
                            <div class="img_card-informations">
                                <img src="../images/bi_pin-map.svg" alt="">
                                <img src="../images/carbon_phone-application.svg" alt="">                                
                            </div>
                            <div class="text_card-informations">
                                <h1> Rua dos anjos, 906</h1>
                                <h1>(18)99629-1816</h1>  
                            </div>                
                        </div>
                        <p>*Voce pode pedir pelo telefone e retirar na nossa loja.</p>
                        <p class="uber-color">Estamos tam<span>bem nos app</span></p>
                        <div>UBER EATS</div>
                        <div>iFood</div>
                    </div>
                </div>
            </div>
            
        </section>
        <script src="../js/google-maps.js"></script>
        <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUOgm9TNIOPTRJpAkda6jvRc8MIwqS0t4&callback=initMap&libraries=&v=weekly&channel=2"
      async></script>

    </main>

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
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

        
   
    
    
      
    
</body>
</html>

