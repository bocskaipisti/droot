<?php include_once('../functions/main.php') ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Sessions</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">


</head>

<body>
        <?php include_once('php/head.php') ?>

        <h1 class="effect_cim">Sessions</h1>

        <!-- ______________________________________________________________________________________________________________________________ -->


            <p class="effect_leiras">

                <?php

                    if(count($_SESSION)==0){
                        $_SESSION['alma'] = 'alma'; $_SESSION['körte'] = 'körte';
                    }
                    foreach ($_SESSION as $KEY=>$SE){
                        echo '<b>'.$KEY.': </b>'.$SE.'<br/><br/>';
                    }

                ?>


            </p>
            <div class="effect_elvalaszto_kek" ></div>

        <!-- ______________________________________________________________________________________________________________________________ -->


        <pre></pre>

</body>
</html>
