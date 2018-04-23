<?php include_once('../functions/main.php') ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Parallax</title>
    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <!-- PARALLAX -->         <script src="../js/parallax.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">

    <style>
        .parallax-window {
            position:relative;
            width: 100%;
            height: 500px;
            overflow:hidden;
            background: transparent;
        }
    </style>

</head>

<span>

<?php include_once('php/head.php') ?>

<h1 class="effect_cim">Parallax</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="js/parallax.js" ></script>');?></span>


    <span class="effect_leiras">Az alábbi sorokkal illeszthető be a kódba. Fontos, hogy a "data-image-src" paraméterbe valós kép elérését adjuk meg!</span>
    <br/><br/>
    <div class="effect_elvalaszto_kek"></div>
    <pre style="color:#F90; font-weight: normal; font-size:12px; line-height: 14px;">

        <?php echo htmlspecialchars('
        <!-- Header -->

        <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
        <!-- PARALLAX -->         <script src="../js/parallax.js" ></script>
        <style>
            .parallax-window {
                position:relative;
                width: 100%;
                height: 500px;
                overflow:hidden;
                background: transparent;
            }
        </style>
        
        <!-- Content -->
        
        <div class="parallax-window" data-parallax="scroll" data-image-src="../info/image/parallax_2.jpg" data-speed="0.2">
            <div style="text-align: center; font-size:40px; color:#FFF; padding: 200px; text-shadow: 0px 0px 20px rgba(0,0,0,1);">
                PARALLAX CONTENT
            </div>
        </div>
        <div class="parallax-window" data-parallax="scroll" data-image-src="../info/image/parallax_1.jpg" data-speed="0.2">
        </div>
        '); ?>
    </pre>

    <div class="effect_elvalaszto_kek"></div>
    <br/><br/>
<!-- ______________________________________________________________________________________________________________________________ -->

    <div class="parallax-window" data-parallax="scroll" data-image-src="../info/image/parallax_2.jpg" data-speed="0.2">
        <div style="text-align: center; font-size:40px; color:#FFF; padding: 200px; text-shadow: 0px 0px 20px rgba(0,0,0,1);">
                PARALLAX CONTENT
        </div>
    </div>
<!-- ______________________________________________________________________________________________________________________________ -->

    <div class="parallax-window" data-parallax="scroll" data-image-src="../info/image/parallax_1.jpg" data-speed="0.2">
    </div>
<!-- ______________________________________________________________________________________________________________________________ -->

    <div class="parallax-window" data-parallax="scroll" data-image-src="../info/image/parallax_4.jpg" data-speed="0.2">
    </div>

<!-- ______________________________________________________________________________________________________________________________ -->

    <div class="parallax-window" data-parallax="scroll" data-image-src="../info/image/parallax_3.jpg" data-speed="0.2">
    </div>

<!-- ______________________________________________________________________________________________________________________________ -->

<pre></pre>

</body>
</html>
