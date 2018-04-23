<?php include_once('../functions/main.php') ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>✤...</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">


    <style>
        .ab_box{
            position: relative;
            top:0px;
            left:0px;
        }

        #box2{
            position: absolute;
            top:0px;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        #box {
            z-index: 1;
            position: absolute;
            top:0px;
            width: 50%;
            height: 100%;
            /*background-color: #2196F3;*/
            color: white;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .handle {
            background-color: #FFF;
            width: 10px;
            height: 100%;
            opacity: 0.8;
            cursor: e-resize;
            position:absolute;
            right: 0;
            bottom: 0;
        }
    </style>
    <script>

        function initialiseResize(e) {
            var box = $(e).parent();
            window.addEventListener('mousemove', startResizing, false);
            window.addEventListener('mouseup', stopResizing, false);
        }
        function startResizing(e) {
            var width_str = (e.clientX - $(box).parent().offset().left);
            if(width_str>=$(box).parent().outerWidth()){width_str=$(box).parent().outerWidth();}
            if(width_str<=10){width_str=10;}
            $(box).css('width',width_str+'px');
        }

        function stopResizing(e) { window.removeEventListener('mousemove', startResizing, false); window.removeEventListener('mouseup', stopResizing, false); }
        $(function () { $('.handle').on("mousedown",function(){ initialiseResize(this); }) })


    </script>
</head>

<body>

<?php include_once('php/head.php') ?>

<h1 class="effect_cim">Főcím</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="js/...js" ></script>');?></span><br/><br/>

<!-- ______________________________________________________________________________________________________________________________ -->

<h1>Cím</h1>
<p class="effect_leiras">
    <b>Alcím</b> leírás.... <br/><br/>
    <b>Alcím</b> leírás.... <br/><br/>
</p>
<div class="effect_elvalaszto_kek" ></div>

<!-- ______________________________________________________________________________________________________________________________ -->

<div class="ab_box" style="width: 600px; height: 400px;">
    <div class="image_before" id="box" style="background-image: url('../images/01.jpg');"><div class="handle" ></div></div>
    <div id="box2" style="background-image: url('../images/02.jpg');"></div>
</div>

<div class="ab_box" style="width: 600px; height: 400px;">
    <div class="image_before" id="box" style="background-image: url('../images/01.jpg');"><div class="handle" ></div></div>
    <div id="box2" style="background-image: url('../images/02.jpg');"></div>
</div>

<pre></pre>

</body>
</html>
