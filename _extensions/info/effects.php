<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Effects Doc</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <!-- EFFEKTEK -->       <script src="../js/effects.js" ></script>

    <link rel="stylesheet" type="text/css" href="css/info.css">


</head>



<body style="margin:0px; padding:0px;" >

<?php include_once('php/head.php') ?>

<h1 class="effect_cim">Effects</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="js/effects.js" ></script>');?></span>

<!---->
<hr/>
    <p class="effect_leiras">
        Fontos, hogy a DIV-nek legyen ID-ja! Ha nincs megadva pozition css, akkor automatikusan "relative" erteket kap.<br/>
        <b>effect</b> class - az adott objektumra aktiválódnak az effektek<br/>
        <b>effect-scroll</b> class - az adott objektumra csak scroll hatására aktiválódnak az effektek<br/>
    </p>

<hr/>




<h1>Opacity</h1>
<p class="effect_leiras">
    <b>effect effect-opacity</b> || data-effect-opacity-value="0.1" || data-effect-duration="1000" data-effect-easing="swing"
    <br/>
    Áttetszőség effekt. Értéke 0-1 között változhat.
</p>
<div id="se1" class="effect effect-opacity" data-effect-opacity-value="0.1"></div>
<br/>

<h1>Color</h1>

<p class="effect_leiras">
    <b>effect effect-color</b> || data-effect-color-value="#000" data-effect-color-opacity="0.6" data-effect-color-duration="4" || data-effect-duration="1000" data-effect-easing="swing"
    <br/>
    Szín effekt. Értéke egy #szín, egy áttetszőség (0-1) és az átváltozás sebessége mp-ben
</p>

<div id="se2" class="effect effect-color" data-effect-color-value="#000" data-effect-color-opacity="0.6" data-effect-color-duration="4"></div>
<br/>


<h1>Move</h1>

<p class="effect_leiras">
    <b>effect effect-move</b> || data-effect-move-direction="left" data-effect-move-length="10%" || data-effect-duration="2000" data-effect-easing="swing"
    <br/>
    Mozgatás effekt. Direciton (left/top/right/bottom) az irányát adja meg, a Length (px, em vagy %) pedig a mértékét.
</p>

<div id="se3" class="effect effect-move" data-effect-move-direction="left" data-effect-move-length="10%" data-effect-duration="2000" data-effect-easing="swing"></div>
<br/>



<h1>Size</h1>

<p class="effect_leiras">
    <b>effect effect-size</b> || data-effect-size-direction="width" data-effect-size-length="20%" || data-effect-duration="1000" data-effect-easing="swing"<br/>
    Méret effekt. Direction (width|height) a szélesség/magasságot, a Length (px, em vagy %) pedig a mértékét.
</p>

<div id="se4" class="effect effect-size" data-effect-size-direction="width" data-effect-size-length="20%"></div>
<br/>

<h1>Rotate</h1>

<p class="effect_leiras">
    <b>effect effect-rotate</b> || data-effect-rotate-degrease="-2" || data-effect-duration="1000" data-effect-easing="swing"<br/>
    Forgatás effekt. Degrease a fokot adja meg (lehet negatív szám is).
</p>

<div id="se5" class="effect effect-rotate" data-effect-rotate-degrease="-1" data-effect-duration="100" data-effect-easing="swing"></div>


<hr/>

<h1>Összevonás</h1>

<p class="effect_leiras">
    <b>effect effect-move effect-opacity</b> || data-effect-move-direction="left" data-effect-move-length="10%" || data-effect-opacity-value="0.1" || data-effect-duration="1000" data-effect-easing="swing"<br/>
    Több effekt is összevonható amennyiben szükséges
</p>

<div id="se6" class="effect effect-move effect-opacity" data-effect-move-direction="left" data-effect-move-length="10%" data-effect-opacity-value="0.1" data-effect-duration="1000" data-effect-easing="swing" ></div>





<br/><br/><br/><br/>
<h1 class="effect_cim">Scroll Effects</h1>
<hr/>
<p class="effect_leiras">
    Csak akkor lépnek működésbe, ha aktívak, vagyis láthatók a böngészőben
</p>

<hr/>
<h1>Opacity</h1>
        <p class="effect_leiras">
            <b>effect-scroll effect-opacity</b> || data-effect-opacity-value="0.1" || data-effect-duration="1000" data-effect-easing="swing"
            <br/>
            Áttetszőség effekt. Értéke 0-1 között változhat.
        </p>
        <div id="te1" class="effect-scroll effect-opacity" data-effect-opacity-value="0.1"></div>
        <br/>

<h1>Color</h1>

        <p class="effect_leiras">
            <b>effect-scroll effect-color</b> || data-effect-color-value="#000" data-effect-color-opacity="0.6" data-effect-color-duration="4" || data-effect-duration="1000" data-effect-easing="swing"
            <br/>
            Szín effekt. Értéke egy #szín, egy áttetszőség (0-1) és az átváltozás sebessége mp-ben
        </p>

        <div id="te2" class="effect-scroll effect-color" data-effect-color-value="#000" data-effect-color-opacity="0.6" data-effect-color-duration="4"></div>
        <br/>


<h1>Move</h1>

        <p class="effect_leiras">
            <b>effect-scroll effect-move</b> || data-effect-move-direction="left" data-effect-move-length="10%" || data-effect-duration="2000" data-effect-easing="swing"
            <br/>
            Mozgatás effekt. Direciton (left/top/right/bottom) az irányát adja meg, a Length (px, em vagy %) pedig a mértékét.
        </p>

        <div id="te3" class="effect-scroll effect-move" data-effect-move-direction="left" data-effect-move-length="10%" data-effect-duration="2000" data-effect-easing="swing"></div>
        <br/>



<h1>Size</h1>

        <p class="effect_leiras">
            <b>effect-scroll effect-size</b> || data-effect-size-direction="width" data-effect-size-length="20%" || data-effect-duration="1000" data-effect-easing="swing"<br/>
            Méret effekt. Direction (width|height) a szélesség/magasságot, a Length (px, em vagy %) pedig a mértékét.
        </p>

        <div id="te4" class="effect-scroll effect-size" data-effect-size-direction="width" data-effect-size-length="20%"></div>
        <br/>

<h1>Rotate</h1>

<p class="effect_leiras">
    <b>effect-scroll effect-rotate</b> || data-effect-rotate-degrease="-2" || data-effect-duration="1000" data-effect-easing="swing"<br/>
    Forgatás effekt. Degrease a fokot adja meg (lehet negatív szám is).
</p>

<div id="te5" class="effect-scroll effect-rotate" data-effect-rotate-degrease="-1" data-effect-duration="100" data-effect-easing="swing"></div>


<hr/>

<h1>Összevonás</h1>

<p class="effect_leiras">
    <b>effect-scroll effect-move effect-opacity</b> || data-effect-move-direction="left" data-effect-move-length="10%" || data-effect-opacity-value="0.1" || data-effect-duration="1000" data-effect-easing="swing"<br/>
    Több effekt is összevonható amennyiben szükséges
</p>

<div id="te6" class="effect-scroll effect-move effect-opacity" data-effect-move-direction="left" data-effect-move-length="10%" data-effect-opacity-value="0.1" data-effect-duration="1000" data-effect-easing="swing" ></div>


<br/><br/><br/><br/>
<h1 class="effect_cim">Initial Effects</h1>
<p class="effect_leiras">
    Inicializáló funkciók. Scrollnál akkor lépnek működésbe, ha nem látható a tartalom, sima effektnél pedig az oldal betöltésekor.<br/>
    Fontos! Tartalmaznia kell az <b>effect-inic</b> class-t és az adott effekt nevének classjat "-inic" névvel, pl. <b>effect-color</b>. Minden inic-es data paramter kell kapjon egy "-inic" vegződést.
</p>

    <h1>Size</h1>

    <p class="effect_leiras">
        <b>effect-scroll effect-inic effect-size effect-size-inic</b> || data-effect-size-direction="width" data-effect-size-length="20%" data-effect-size-direction-inic="width" data-effect-size-length-inic="40%" || data-effect-duration="1000" data-effect-easing="swing" data-effect-duration-inic="3000" data-effect-easing-inic="linear" <br/>
        Méret effekt. Direction (width|height) a szélesség/magasságot, a Length (px, em vagy %) pedig a mértékét.
    </p>
<!---->


    <div id="x1" class="effect-scroll effect-size effect-inic effect-size-inic effect-color effect-color-inic" data-effect-color-value="#FF0" data-effect-color-opacity="1" data-effect-color-duration="3" data-effect-color-value-inic="#F90" data-effect-color-opacity-inic="1" data-effect-color-duration-inic="4" data-effect-size-direction="width" data-effect-size-length="30px" data-effect-size-direction-inic="width" data-effect-size-length-inic="1000px" data-effect-duration="300" data-effect-easing="swing" data-effect-duration-inic="500" data-effect-easing-inic="linear" ></div>


<br/><br/><br/><br/>


</body>
</html>



