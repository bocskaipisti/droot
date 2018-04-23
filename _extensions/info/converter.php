<?php include_once('../functions/main.php') ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>✤ Converter</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <!-- JQUERY -->         <script src="../js/main.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">
    <style>
        textarea{
            width:100%;
            height: 500px;
            display: block;
            margin-bottom: 20px;
        }
    </style>
    <script>
        function escapeHtml(str)
        {
            var map =
                {
                    '&': '&amp;',
                    '<': '&lt;',
                    '>': '&gt;',
                    '"': '&quot;',
                    "'": '&#039;'
                };
            return str.replace(/[&<>"']/g, function(m) {return map[m];});
        }

        function convert(){
            setTimeout(function () {
                kodresz = $('#eredeti').val();
                $('#eredmeny').val(escapeHtml(kodresz));
            },500)
        }

        $(document).keydown(function(e){ if( e.which === 86 && e.ctrlKey || e.which===13){
            convert();
        } });

    </script>
</head>

<body>

<?php include_once('php/head.php') ?>

<h1 class="effect_cim">Converter</h1>

<!-- ______________________________________________________________________________________________________________________________ -->


<p class="effect_leiras">
    <b>Eredeti kódrész</b> másoljuk be ctrl+v -vel vagy nyomjunk Entert: <br/><br/>
    <textarea id="eredeti" style="height:50px;" placeholder="pl: <alma>"></textarea>
    <b>Eredmény</b> itt látjuk az átalakított végeredményt: <br/><br/>
    <textarea id="eredmeny" placeholder="&amp;lt;alma&amp;gt;"></textarea>
</p>
<!-- ______________________________________________________________________________________________________________________________ -->


<pre></pre>

</body>
</html>
