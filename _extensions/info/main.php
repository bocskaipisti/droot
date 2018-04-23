<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Main Doc</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <!-- EFFEKTEK -->       <script src="../js/main.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">


</head>

<body>
<?php include_once('php/head.php') ?>

<p style="margin:0px; padding:0px;" >
<h1 class="effect_cim">Main Functions</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="js/main.js" ></script>');?></span>

<!---->
<hr/>
<p class="effect_leiras">
    Fontos, hogy a DIV-nek legyen ID-ja! Ha nincs megadva pozition css, akkor automatikusan "relative" erteket kap.<br/>
    <b>effect</b> class - az adott objektumra aktiválódnak az effektek<br/>
    <b>effect-scroll</b> class - az adott objektumra csak scroll hatására aktiválódnak az effektek<br/>
</p>



<hr/>


<h1>A, AL</h1>
<p class="effect_leiras">
    <b>A, AL</b> alert('valtozó') lerövidítése
</p>
<div class="effect_elvalaszto" ></div>

<h1>AJ, AJX</h1>
<p class="effect_leiras">
    <b>AJ(), AJX()</b> - Ajax-hívás, flépítése: <b>AJ(url, parameters, [succes_param]);</b><br/>
    A success_param opcionális, ha van értéke, átadódik az ajax_success függvénynek

<pre>

    // Different separators, same result
            AJ('main_ajax.php','param1=one/ param2:two');
            AJ('main_ajax.php','param1=one; param2=two');
            AJ('main_ajax.php','param1:one, param2:two');

    // Success param

            AJ('main_ajax.php','param1=one/ param2:two','number_sending');

    // Success function width data - opcional
            function ajax_success(data){
                console.log(data);
                console.log(ajax_param);
            }

</pre>
</p>

<br/>
<div class="effect_elvalaszto" ></div>

<h1>CL, CB, CF</h1>
<p class="effect_leiras">
    <b>CL</b> console.log, CL('ertek') = <span style="border:1px solid #CCC; padding:0px 5px;">value</span><br/><br/>
    <b>CB</b> CB('ertek') with black background =<span style="border:1px solid #CCC; color:#9AF; background-color: #000; padding:0px 5px;">value</span><br/><br/>
    <b>CF</b> CF('ertek') bigger size =<span style="border:1px solid #CCC; color:#9AF; padding:0px 5px; font-size: 18px;">value</span>
</p>
<br/>
<div class="effect_elvalaszto" ></div>

<h1>CD, DB</h1>
<p class="effect_leiras">
    <b>CD, DB</b> debug - bárhova helyezzük le a kódban, megmutatja, hogy melyik fájl, hányadik sorában és karakterénél található ez a hívás. Nagyon hasznos hibakeresésnél. CD()=<span style="border:0px solid #CCC; color:#F90; background-color: #EEE; padding:0px 5px;">debug: main.php:65:5</span><br/><br/>
</p>
<br/>
<div class="effect_elvalaszto" ></div>

<h1>CE, CC</h1>
<p class="effect_leiras">
    <b>CE</b> console.error('ertek') - hibaüzenetként írja ki a szöveget/tömböt<br/><br/>
    <b>CC</b> console.clear - a konzol tisztítása
</p>
<br/>
<div class="effect_elvalaszto" ></div>


<h1>CO, CT</h1>
<p class="effect_leiras">
    <b>CO</b> console.dir('tömb') tömb kilistázására szolgál - más, mint a console.log() <br/><br/>
</p>
<br/>
<div class="effect_elvalaszto" ></div>

<h1>C0-C9</h1>
<p class="effect_leiras">
    <b>CO</b> sorszámok kilistázása, jól jön folyamatkövetésnél pl. C1=<span style="border:1px solid #CCC; color:#9AF; background-color: #000; padding:0px 5px;">1</span><br/><br/>

</p>
<br/>
<div class="effect_elvalaszto" ></div>

<h1>CT</h1>
<p class="effect_leiras">
    <b>CT()</b> sorszámok kilistázása, jól jön folyamatkövetésnél pl. C1=<span style="border:1px solid #CCC; color:#9AF; background-color: #000; padding:0px 5px;">1</span>.
    Az alábbi példában az eredmény: bar, foo<br/>

    <pre>
    function foo() {
            function bar() {
                    console.trace();
            }
            bar();
    }
    foo();
    </pre>
</p>

<br/>
<div class="effect_elvalaszto" ></div>



</body>
</html>



