<?php

    /* Basic Functions */       include_once ('php/main.php');
    /* Database        */       include_once ('php/php_database.php');


// Login check
    include_once ('php/login.php');

    $lang = 1; //alapból az angol [#language/region]

    $title = 'valami';
    $meta_description = 'Droot descr';
    $meta_key = 'Droot key';
    $meta_author = 'Droot auth';


// #Location

    include_once('php/location.php');

// #Language

    include_once('php/language.php');


// #PDF creation

    COOKIE();

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="description" content="<?=$meta_description?>">
    <meta name="keywords" content="<?=$meta_key?>">
    <meta name="author" content="<?=$meta_author?>">

    <title></title>

    <!-- JQUERY -->         <script src="js/jquery.js"></script>


    <script src="functions/js_basic.js"></script>

    <script>

        $(function () {
            $('#guitar1').fadeIn(1000);
        })



    </script>

    <style>
        @media screen and (max-width: 1019px) {
            body{
                position: relative;
                margin:0px; padding:0px;
                font-family: Calibri;

            }
            .center{
                position: relative;
                width: 100%;
                margin: 0 auto;
                background-image: url("images/bg.jpg");
                box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            }

            .unit{
                position: relative;
                width: calc(100% - 16em);
                height: 47em;
                padding: 8em;
            }
            .image{
                width: 100%;
            }

            .image_guitar_left,.image_guitar_right{
                opacity: 1;
                position: absolute;


            }
            .image_guitar_left{
                top:6em;
                left:8em;
                width: 40%;

            }
            .image_guitar_right{
                right:5em;
                z-index: 1;
                top:7em;
                width: 25%;
            }

            .article{
                background-color: rgba(0,0,30,0.5);
                box-shadow:inset 0em 0em 3em rgba(0,0,0,0.3);
                border-radius: 1em;
                position: absolute;
                top:16em;
                padding: 1.8em;
                width: calc(100% - 20em);
                text-align: justify;
                line-height: 2.4em;
                color: #FFF;
                cursor: default;
            }

            .a_right{
                top:20em;
            }

            .a_left{

            }

            .article_title{
                font-size: 2.5em;
            }
            .article_text{
                opacity: 0.8;
                font-size: 1.6em;
            }
            .contact{
                text-decoration: none;
                font-family: Calibri;
                font-size: 1.1em;
                color: #FFF;
            }
        }
        @media screen and (min-width: 1020px) {

            body{
                position: relative;
                margin:0px; padding:0px;
                background-image: url("images/bg.jpg");
                font-family: Calibri;
            }
            .center{
                position: relative;
                top:50px;
                width: 1024px;
                margin: 0 auto;
                margin-bottom: 300px;

                background-color: #FFF;
                box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            }
            .unit{
                position: relative;
                width: calc(100% - 200px);
                height: 400px;
                padding: 100px;
            }
            .image{
                width: 100%;
            }

            .image_guitar_left{
                position: absolute;
                top:120px;
                left: 100px;
                width: 240px;
            }
            .image_guitar_right{
                position: absolute;
                top:120px;
                right: 100px;
                width: 240px;
            }

            .article{
                position: absolute;
                top:120px;
                width: 400px;
                text-align: justify;
                line-height: 30px;
                color: #9BD;
                cursor: default;
            }

            .a_right{
                right: 160px;
            }

            .a_left{
                left: 160px;
            }

            .article_title{
                font-size: 28px;
            }
            .article_text{
                opacity: 0.8;
                font-size: 18px;
            }
            .contact{
                text-decoration: none;
                font-family: Calibri;
                font-size: 20px;
                color: #469;
            }
        }
    </style>

</head>



<body style="" >
<div class="center">

    <!-- Honlap -------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="unit">

                <span class="article_title">
                    Geo Info
                </span>

        <?php

            KEK($location);
            //foreach ($location as $key=>$loc){ echo $key.' '.$loc; echo '<br/>'; }

        ?>

        <div class="article a_right">


        </div>
    </div>


    <!-- 1. Célok -------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="unit">

        <div class="article a_right">

                <span class="article_title">
                    Sessions
                </span>
            <p class="article_text">
                A kapcsolatfelvételt követően a személyes találkozás az első lépés, hogy a pontos célokat és igényeket meghatározzuk.

            </p>


        </div>
    </div>

    <video autoplay muted loop id="myVideo" class="image" >
        <source src="videos/10.mp4" type="video/mp4">
    </video>

    <!-- 2./3. Domain + Tárhely -------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="unit">
        <img class="image_guitar_right" src="images/03.png">
        <div class="article a_left">

                <span class="article_title">
                    2. Domain név és tárhely
                </span>
            <p class="article_text">
                Le kell foglalni egy, még nem létező domain-nevet és hozzá tartozó tárhelyet, melynek parméterei az igényektől függnek.
            </p>
            <br/>
            <span class="article_title">
                    3. Grafika, arculatterv
                </span>
            <p class="article_text">
                A honlapról egy arculatterv készül, így lehet előre látni, hogy hogyan fog kinézni a honlap végleges formájában.
            </p>


        </div>
    </div>

    <img class="image" src="images/bicicly.jpeg" />

    <!-- 4./5. Programozás + Átadás -------------------------------------------------------------------------------------------------------------------------------- -->

    <div class="unit">
        <img class="image_guitar_left" src="images/04.png" >
        <div class="article a_right">
                <span class="article_title">
                    4. Programozás
                </span>
            <p class="article_text">
                Ez a legidőigényesebb része a folyamatnak. Az arculatterv alapján elkészül a honlap kódja, háttérmunkája, képekkel és valós szövegrészekkel.
            </p>
            <br/>

            <span class="article_title">
                        5. Átadás
                </span>
            <p class="article_text">
                Nem csak az élő honlap kerül átadásra, hanem egy biztonsági mentés is és minden, ami egy esetleges későbbi fejlesztéshez kellhet.
            </p>


        </div>
    </div>
    <img class="image" src="images/window.jpeg" />

    <!-- Kapcsolat -------------------------------------------------------------------------------------------------------------------------------- -->


    <div class="unit">
        <img class="image_guitar_right" src="images/05.png">
        <div class="article a_left">

                <span class="article_title">
                    Kapcsolat
                </span>
            <br/>
            <p class="article_text">
                név:&nbsp;&nbsp;&nbsp; <span class="contact">Bocskai István</span><br/>
                email: <a class="contact" href="mailto:info@momentslumiere.com">info@momentslumiere.com</a><br/>
                mobil: <a class="contact" href="tel:+32-494-207485" >+32-494-207485</a><br/>
            </p>


        </div>
    </div>

    <img class="image" src="images/end.jpeg" />




</div>

</body>
</html>
