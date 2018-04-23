w<?php
    include_once('../functions/main.php');
    include_once("../functions/php_database.php");
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Database basic functions</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">
    <style>
        .effect_leiras{
            position: relative;
            left:40px;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .effect_elvalaszto_kek{
            opacity:0;
        }
        h2{
            color: #999;
        }

    </style>

</head>

<body>


<?php include_once('php/head.php') ?>

<h1 class="effect_cim">Database basic functions</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('include_once("functions/php_database.php");');?></span><br/><br/>
<!-- ______________________________________________________________________________________________________________________________ -->

<h2>Query, selections</h2>
<p class="effect_leiras">
    <b>db_query($query)</b> ez általános SQL parancs, segítségével le lehet kérni adatokat vagy épp beírni értékeket adott adattáblába. <br/><br/>
    <b>db_array($query)</b> a visszatérési értéket alapból tömbbe teszi.<br/><br/>
    <b>db_oneValue($query)</b> egyetlen cellaértéket ad vissza. <br/><br/>
    <b>db_oneRow($query)</b> egy teljes rekordot listáz ki tömbbe. <br/><br/>

</p>
<div class="effect_elvalaszto_kek" ></div>


<h2>Additional functions</h2>
<p class="effect_leiras">
    <b>db_nextId($tablename)</b> amennyiben egy adattáblában van auto_increment érték, akkor megadja a következő automatikus éréket. <br/><br/>
    <b>db_arrayToTable($array)</b> egy tömbböt táblázattá alakító és megjelenítő funkció.<br/><br/>
    <b>db_rowCount($query)</b> adott lekérdezés összes rekordjának a számát adja vissza. <br/><br/>


</p>
<div class="effect_elvalaszto_kek" ></div>

<h2>Error, uniq</h2>
<p class="effect_leiras">
    <b>db_error()</b> ha meghívjuk a függvényt, akkor kilistázza az esetleges adatbázis-hibákat. <br/><br/>
    <b>db_uniqid()</b> egy egyedi id-t generál (számsor). <br/><br/>
</p>
<div class="effect_elvalaszto_kek" ></div>

<h2>Database actualize</h2>
<p class="effect_leiras">
    amennyiben nem tud a rendszer az adatbázishoz csatlakozni, akkor automatikusan betöltődik egy felület, mely segíti aktualizálni. <br/><br/>
    Ez manuálisan itt történik: <a href="/../functions/data/database_actual.php" >aktualizálás.</a><br/><br/>
    <img src="image/database_act.png" style="box-shadow: 0px 0px 10px rgba(0,0,0,0.5); width: 700px"/>
</p>
<br/>
<div class="effect_elvalaszto_kek" ></div>



<!-- ______________________________________________________________________________________________________________________________ -->


<pre></pre>

</body>
</html>
