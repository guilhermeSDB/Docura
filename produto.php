<?php 

include_once "array.php";

echo '<br>';

$id = $_POST['id'];

echo '<br>';
echo '<pre>';
print_r($produtos[$id]);
echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    width: 100vw;
    height: 100vh;
    background-color: rgb(10, 10, 10);
    overflow: hidden;
}

.content {
    width: 100vw;
    min-height: 100vh;
    background-color: rgb(10, 10, 10);
}

/****************************************************************/

.card {
    width: 800px;
    height: 450px;
    margin-top: 100px;
    margin-left: auto;
    margin-right: auto;
    background-color: rgb(20, 20, 20);
    border-radius: 5px;
    box-shadow: 15px 15px 10px rgb(00, 00, 00), -10px -10px 10px rgb(00, 00, 00);
    position: relative;
}

/********************************************************/

.box1 {
    width: 350px;
    height: 450px;
    float: left;
}

.text1 {
    color: rgb(180, 180, 180);
    display: block;
    margin-left: 25px;
    padding-top: 25px;
    font-size: 15px;
}

.left_Point {
    color: rgb(120, 120, 120);
    list-style-type: none;
    margin-top: 180px;
    margin-left: 25px;
    font-size: 18px;
    position: absolute;
}

.White_point {
    width: 5px;
    height: 5px;
    background-color: rgb(255, 255, 255);
    border-radius: 50px;
    position: absolute;
    margin-left: 1px;
}


.Point2 {
    margin-top: 7px;
}

/****************************************************/

.img {
    /*width: 360px;*/
    height: 250px;
    background-image: url(http://www.pngmart.com/files/5/Hamburger-PNG-Transparent-Image.png);
    background-size: 70% 60%;
    background-repeat: no-repeat;
    margin-top: 100px;
    margin-left: 80px;
    /*position: absolute;*/
}

/*******************************************************/

.bottom_point {
    color: rgb(180, 180, 180);
    /*margin-top: 340px;*/
    margin-left: 25px;
}

.fas-fa-palette {
    font-size: 15px;

}

.text2 {
    font-size: 8px;
}

/******************************************************/

.box2 {
    width: 450px;
    height: 450px;
    float: left;
}

.right_point {
    float: right;
    color: rgb(180, 180, 180);
    font-size: 12px;
    padding-top: 25px;
    margin-right: 25px;
    list-style-type: none;
}

/*****************************************************/

.holder {
    margin-top: 150px;
    margin-left: 35px;
}

.big_text1 {
    color: rgb(120, 120, 120);
    font-size: 9px;
}

.big_text2 {
    color: rgb(180, 180, 180);
    margin-top: 10px;
    word-break: break-all;
    font-size: 13px;
}

.big_text3 {
    margin-top: 15px;
    color: rgb(120, 120, 120);
    font-size: 8px;
    word-break: break-all;
}

/******************************************************/

.clik {
    margin-top: 20px;
    margin-left: 35px;
    width: 90px;
    height: 20px;
    border-radius: 3px;
    font-size: 10px;
    color: rgb(120, 120, 120);
}

/********************************************************/
.text3 {
    padding-left: 300px;
    /*padding-top: 150px;*/
    font-size: 10px;
    color: rgb(120, 120, 120);

}

.menu {
    list-style-type: none;
    padding-right: 30px;
    padding-top: 75px;
}

.icon {
    float: right;
    padding: 10px 5px;
    margin-top: -10px;
    font-size: 10px;
    color: rgb(120, 120, 120);
}

.badboy {
    clear: both;
    width: 0px;
    height: 0px;
}
    </style>
</head>
<body>
<html>

<head>
    <title>card</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="./app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>

<body>
    <div class="content">
        <div class="card">
            <div class="box1">
                <b class="text1" id="myDiv">JOHN DDE </b>
                <ul class="left_Point">
                    <li class="Point1">
                        <i class="fas fa-ellipsis-v"></i>
                    </li>
                    <span class="White_point"></span>
                    <li class="Point2">
                        <i class="fas fa-ellipsis-v"></i>
                    </li>
                </ul>
                <div class="img"></div>
                <ul class="bottom_point">
                    <i class="fas fa-palette"></i>
                    <span class="text2">Window rainbow</span>
                </ul>
            </div>
            <div class="box2">
                <ul class="right_point">
                    <li class="Point3">
                        <i class="fas fa-sliders-h"></i>
                    </li>
                </ul>
                <div class="holder">
                    <p class="big_text1">Colors are specified using predefined color names or RGB, HEX, HSL, RGBA</p>
                    <p class="big_text2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br />sed diam nonummy nibh euismod tincidunt<br /> ut laoreet dolore magna aliquam erat volutpat.</p>
                    <p class="big_text3">Before any humans walked the earth, when the world was the land of the animals,a very long winter set in<br />The sun did not come out for three years. The air was always dark. Thick clouds hung low and covered the sky<br />It snowed all the time.The animals were suffering very much from this long winter.The lack of food was<br />alarming enough,and the lack of heat made it all absolutely unbearable.</p>
                </div>
                <button class="clik" onclick="toggle()">introduction</button>

                <ul class="menu">
                	 <span class="text3">Font Awesome</span>
                    <li class="icon">
                        <i class="fab fa-medium-m"></i>
                    </li>
                    <li class="icon">
                        <i class="fab fa-facebook-f"></i>
                    </li>
                    <li class="icon">
                       <i class="fab fa-twitter-square"></i>
                    </li>
                    <div class="badboy"></div>
                </ul>
            </div>
            <div class="badboy"></div>
        </div>
    </div>
</body>

</html>
</body>
</html>