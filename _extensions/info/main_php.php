<?php
    include_once('../functions/main.php');
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Main PHP Doc</title>
    <link rel="stylesheet" type="text/css" href="css/info.css">


</head>

<body>
<?php include_once('php/head.php') ?>

<p style="margin:0px; padding:0px;" >
<h1 class="effect_cim">Main PHP Functions</h1><span class="effect_leiras_source"><?php echo htmlspecialchars("include_once('php/main.php')");?></span>




<hr/>


<h1>SHOW, S, KEK, BLUE, GREEN, RED, BLUE,  SC</h1>
<p class="effect_leiras">
    <b>SHOW(ertek), S(ertek)</b> kiiratja az adott szöveget/tömböt/objektumot. Pl. SHOW('ok') = <?=SHOW('ok'); ?>
</p>
<p class="effect_leiras">
    <b>BLUE(ertek), KEK(ertek)</b> kiiratja az adott szöveget/tömböt/objektumot kékkel. Pl. KEK('ok') = <?=BLUE('ok'); ?>
</p>
<p class="effect_leiras">
    <b>GREEN(ertek)</b> kiiratja az adott szöveget/tömböt/objektumot kékkel. Pl. GREEN('ok') = <?=GREEN('ok'); ?>
</p>
<p class="effect_leiras">
    <b>RED(ertek)</b> kiiratja az adott szöveget/tömböt/objektumot kékkel. Pl. RED('ok') = <?=RED('ok'); ?>
</p>
<p class="effect_leiras">
    <b>NBLUE(ertek)</b> kiiratja az adott szöveget/tömböt/objektumot sötétkékkel. Pl. NBLUE('ok') = <?=NBLUE('ok'); ?>
</p>
<p class="effect_leiras">
    <b>SC(ertek,szín)</b> kiiratja az adott szöveget/tömböt/objektumot. Pl. SHOW('ok','#000') = <?=SC('ok','#000'); ?>
</p>
<br/>



<div class="effect_elvalaszto" ></div>

<h1>CIMKE, CIMSOR</h1>

        <p class="effect_leiras">
            <b>CIMKE(ertek), CIMSOR(ertek)</b> kiiratja az adott szöveget/tömböt/objektumot, címként kiemelve. Pl. CIMKE('ok') = <?=CIMKE('ok'); ?>
        </p>
        <br/><div class="effect_elvalaszto" ></div>


</body>
</html>



