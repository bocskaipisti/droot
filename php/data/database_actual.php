<?php
    include_once(__DIR__.'/../main.php');
    $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>DB - update</title>

    <!-- JQUERY -->         <script src="<?=$actual_link?>/../../../js/jquery.js" ></script>
    <!-- MAIN -->           <script src="<?=$actual_link?>/../../../js/main.js" ></script>
    <!-- CSS -->            <link rel="stylesheet" type="text/css" href="<?=$actual_link?>/../../../info/css/info.css">

    <style>
        button{
            padding:7px 20px;
            font-size:18px;
            background-color: #F90;
            color:#FFF;
            border-radius: 2px;
            border-width: 0px;
            box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover{
            background-color: #C80;
            box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);

        }
        input{
            position: relative;
            color:#9AF;
            top:3px;
            padding:10px;
        }
    </style>
    <script>

        $(function () {
            $('.error_message').fadeOut(0);
            $('.cool_message').fadeOut(0);
        })

        function ajax_success(data) {
            if(data=='cool'){
                $('.error_message').fadeOut(0);
                $('.cool_message').fadeIn(500);
            }else{
                $('.error_message').fadeIn(500);
                $('.cool_message').fadeOut(0);
            }
        }
        function connect() {
            $('.error_message').fadeOut(50);
            $('.cool_message').fadeOut(50);
            var aj_str = "user="+$('#user').val()+';'+"host="+$('#host').val()+';'+"pw="+$('#pw').val()+';'+"dbname="+$('#dbname').val()+';'+"dbport="+$('#dbport').val();
            AJ("database_save.php",aj_str);
        }


    </script>
</head>

<body>



<h1 class="effect_cim">Adatbázis frissítés</h1><span class="effect_leiras_source">az adatbázis elérése nem lehetséges, kérlek add meg az elérési értékeket! Az alábbiakban vannak előre javasolt értékek is:</span><br/><br/>

<!-- ______________________________________________________________________________________________________________________________ -->


<p class="effect_leiras">
    <div class="error_message" style="display: none;"><b style="color: #F90;">A megadott értékek nem helyesek! Érdemes újra megpróbálni:</b><br/><br/><br/></div>
    <div class="cool_message" style="display: none;"><b style="color: #4F3;">A megadott értékek helyesek! Az adatbázis naprakész!</b><br/><br/><br/></div>

    <b>Host</b>        <br/><input id="host" type="text" value="localhost" placeholder="localhost"/><br/><br/>
    <b>User</b>        <br/><input id="user" type="text" value="root" placeholder="root"/><br/><br/>
    <b>Passw.</b>        <br/><input id="pw" type="text" value="" placeholder=""/><br/><br/>
    <br/>
    <br/>
    <b>Database Name</b>        <br/><input id="dbname" type="text" value="" placeholder=""/><br/><br/>
    <b>Database Port</b>        <br/><input id="dbport" type="text" value="3306" placeholder="3306"/><br/><br/>

    <br/>

    <button onclick="connect()">Connect</button>
    <br/><br/>
</p>

<div class="effect_elvalaszto_kek" ></div>

<!-- ______________________________________________________________________________________________________________________________ -->


<pre></pre>

</body>
</html>
