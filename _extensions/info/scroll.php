<?php include_once('../functions/main.php') ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Scroll effektek</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <!-- SCROLL -->         <script src="../js/scroll.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">





</head>

<body>
<div class="TARTALOM">
<?php include_once('php/head.php') ?>

<h1 class="effect_cim" >Scroll Effektek</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="js/scroll.js" ></script>');?></span><br/><br/>

    <!-- ______________________________________________________________________________________________________________________________ -->

    <div class="effect_elvalaszto_kek" ></div><br/>

    <h1>Scroll PageDown/PageUpp slow</h1>
    <span class="effect_leiras">Ha a Page Down vagy a Page Upp gombra kattintok, akkor a görgetés szép lassan történik és nem azonnal.</span>

    <br/><br/>



    <!-- ______________________________________________________________________________________________________________________________ -->

    <div class="effect_elvalaszto_kek" ></div><br/>

    <h1>Scroll link</h1>
    <span class="effect_leiras">Linkek kattintásakor szépen lassan görget le a megadott helyre. A link hrefje kell tartalmazza a "hely" id-ját egy # jellel az elején.</span>

    <br/><br/>
    <a href="#link_1" style="cursor: pointer; color: #F90; text-decoration: none;">Kattints ide</a> <span style="opacity: 0.3">(href="#link_1")</span>


<p class="effect_leiras">
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
    <b>Sor</b> ... <br/><br/>
</p>

    <div id="link_1">Ide ugrik  <span style="opacity: 0.3">(id="link_1")</span></div> <br/><br/>
    <div class="effect_elvalaszto_kek" ></div>
<!-- ______________________________________________________________________________________________________________________________ -->


    <h1>Go to top - scroll</h1>
    <span class="effect_leiras">Kattintáskor ugorjon a lap tetejére: <b>onclick="GoToTop()"</b></span><br/>
    <b onclick="GoToTop()" style="cursor: pointer; color: #F90;">Kattints ide</b>

    <br/><br/>
    <div class="effect_elvalaszto_kek" ></div><br/><br/>

</div>
</body>
</html>
