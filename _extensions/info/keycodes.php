<?php include_once('../functions/main.php') ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>KeyCodes</title>

    <!-- JQUERY --> <script src="../js/jquery.js" ></script>
    <!-- KEYCODES --> <script src="../js/keycodes.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">

    <script>

        function keypressed(val){
            $('#character_code_value').html(val);
        }
        function keypressed2(val){
            $('#character_code_value2').html(val);
        }
        $(document).keypress(function(e) { if(e.which == 13) { alert('You pressed enter!'); } });

        function type_end(t,val) {
            console.log(t);
            console.log(val);
            $(t).animate({'opacity':'0'}).animate({'opacity':'1'})
        }
        
    </script>


</head>

<body>

<?php include_once('php/head.php') ?>

<h1 class="effect_cim">KeyCodes</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="js/keycodes.js" ></script>');?></span><br/><br/>

<!-- ______________________________________________________________________________________________________________________________ -->



    <div class="effect_elvalaszto_kek" ></div>
    <h1>Billentyűkód</h1>
    <p class="effect_leiras">
        Készítsünk egy <b>function keypressed(val){console.log(val);}</b> függvényt a kódunkba és minden billentyűzet-megnyomásnál ez fog meghívódni.<br/>
    <br/>
    </p>

<p class="effect_leiras">
    </p>
<b>Nyomj le egy karaktert a billentyűzeten, a karakterkódja:</b><br/><br/> <div id="character_code_value" style="position:relative; display:inline-block; background-color: #F93; color:#FFF; padding:10px;">Lenyomáskor</div> <div id="character_code_value2" style="position:relative; display:inline-block; background-color: #F93; color:#FFF; padding:10px;">Felengedéskor</div><br/><br/>
<pre>
    $(function () {
        $('html').on('keypress',function (e) {
                var char_str = e.charCode; console.log(char_str);
        })
        $('html').on('keyup',function (e) {
                var char_str = e.charCode; console.log(char_str);
        })
    })
</pre>

    <div class="effect_elvalaszto_kek" ></div>

<!-- ______________________________________________________________________________________________________________________________ -->

<br/>
<p class="effect_leiras">
    <h1>Spéci billentyűk</h1>
    Ha ctrl/alt/shift karaktereket is nézzük:
    <b>$(document).keydown(function(e){ if( e.which === 69 && e.ctrlKey && e.shiftKey && e.altKey ){ /*kódrész*/ } });</b>
    <br/>
    Ha azt vizsgáljuk, hogy pl. Enter gomb megnyomódott-e:
    <b>$(document).keypress(function(e) { if(e.which == 13) { alert('You pressed enter!'); } });</b>
    Ha azt vizsgáljuk, hogy pl. Enter gomb megnyomódott-e beviteli mezőben:
    <b>$(function(){$('.input_field').keypress(function(e) { if(e.which == 13) { alert('You pressed enter in input!'); } })});</b>
</p>
<br/><div class="effect_elvalaszto_kek" ></div>

<!-- ______________________________________________________________________________________________________________________________ -->

<br/>
<p class="effect_leiras">
    <h1>Időzített válasz</h1>
    <input class="input_field" value="" type="text" style="padding:10px" placeholder="írj be ide valamit"/><br/><br/>
    Ha a beviteli mezőben gépelés után (kis késleltetéssel) történjen valami, akkor adjunk az inputnak <b>input_field</b> class-t és írjunk egy hasonló függvényt:<br/>
    <pre>

        function type_end(t,val) {
            console.log(t); console.log(val);
            $(t).animate({'opacity':'0'}).animate({'opacity':'1'})
        }

    </pre>
    <br/>
</p>
<br/><div class="effect_elvalaszto_kek" ></div>

</body>
</html>
