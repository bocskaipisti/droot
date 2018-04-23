<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Info</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <!-- BOOTSTRAP-->
    <!-- Latest compiled and minified CSS --> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme --> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript --> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        html{
            padding:100px;
            padding-top: 60px;
            font-family: Calibri;
        }
        .effect_cim{
            color: #9AF;
        }
        .effect{
            width: 100%;
            height: 9px;
            background-color: #FF8866;
        }
        .effect_leiras{
            font-size: 12px;
            color:#666;
        }
        .effect_leiras_source{
            font-size: 14px;
            color:#9AF;
        }
        hr{
            border-width: 0px;
            border-top: 1px #DDD dotted;
        }
        .box{
            color:#AAC;
            font-size: 14px;
            position: relative;
            vertical-align: top;
            text-align: center;
            width: 120px;
            height: 120px;
            padding:12px;
            border-radius: 10px;
            box-shadow: 0px 2px 6px rgba(0,0,0,0.2);
            cursor: pointer;
            transition: .3s;
            margin:10px;
            display: inline-block;

        }
        .box:hover{
            box-shadow: 0px 2px 6px rgba(0,0,0,0.5);
        }
        .disabled{
            opacity: 0.3;
        }
        .icon{
            position: absolute;
            top:40px;
            left:40px;
            display: block;
            color: rgba(0,0,100,0.5);
            margin-top:10px;
            font-size: 45px;
        }

        .php{
            color: rgba(30,60,200,0.6);
        }

        .css{
            color: #F98;
        }

        .html{
            color: #5599AA;
        }
    </style>

</head>



<p style="margin:0px; padding:0px;" >

    * adatbázis-alap-feltöltés!<br/>
    * képgaléria<br/>
    * effects php!<br/>


<h1 class="effect_cim">Info</h1><span class="effect_leiras_source">

<hr/>
    <div class="box" onclick="window.open('tags.php','_blank')">HTML5 alapok<span class="icon html glyphicon glyphicon-flash"></span></div>
    <div class="box" onclick="window.open('main.php','_blank')">Main JS<span class="icon glyphicon glyphicon-send"></span></div>
    <div class="box " onclick="window.open('effects.php','_blank')">Effects JS<span class="icon glyphicon glyphicon-star"></span></div>

<hr/>

    <div class="box disabled">(Color JS)<span class="icon glyphicon glyphicon-pencil"></span></div>
    <div class="box" onclick="window.open('keycodes.php','_blank')">Keycodes JS<span class="icon glyphicon glyphicon-download-alt"></span></div>
    <div class="box" onclick="window.open('parallax.php','_blank')">Parallax JS<span class="icon glyphicon glyphicon-leaf"></span></div>
    <div class="box" onclick="window.open('scroll.php','_blank')">Scroll JS<span class="icon glyphicon glyphicon-triangle-bottom"></span></div>
    <div class="box disabled">(Drag&Drop)<span class="icon glyphicon glyphicon glyphicon-move"></span></div>
    <div class="box" onclick="window.open('gallery.php','_blank')">Gallery<span class="icon glyphicon glyphicon-th-large"></span></div>
    <div class="box" onclick="window.open('gallery.php','_blank')">Gallery<span class="icon glyphicon glyphicon-picture"></span></div>
<hr/>

    <div class="box" onclick="window.open('main_php.php','_blank')">Main PHP<span class="icon php glyphicon glyphicon-send"></span></div>
    <div class="box" onclick="window.open('login_logout.php','_blank')">Login&Logout <span class="icon php glyphicon glyphicon-star-empty"></span></div>
    <div class="box disabled">(Effects PHP) <span class="icon php glyphicon glyphicon-star-empty"></span></div>
    <div class="box" onclick="window.open('database.php','_blank')">DB Connect <span class="icon php glyphicon glyphicon-retweet"></span></div>
    <div class="box" onclick="window.open('database_create.php','_blank')">DB Create <span class="icon php glyphicon glyphicon-retweet"></span></div>
    <div class="box"onclick="window.open('dropzone.php','_blank')">Dropzone <span class="icon php glyphicon glyphicon-picture"></span></div>
    <div class="box disabled">(FONTS) <span class="icon php glyphicon glyphicon-text-background"></span></div>
    <div class="box" onclick="window.open('sessions.php','_blank')">Sessions<span class="icon php glyphicon glyphicon-flash"></span></div>
    <div class="box disabled">(URL) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>

    <br/>
    <div class="box disabled">(GCOLORS) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>
    <div class="box disabled">(TCOLORS) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>
    <div class="box disabled">(STYLES) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>
    <div class="box disabled">(CONSTANS!!!) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>
    <div class="box disabled">(URL & SEO) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>
    <div class="box disabled">(BUYING PR.) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>
    <br/>
    <div class="box disabled">(EMAIL) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>
    <div class="box disabled">(NEWSLETTER) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>
    <div class="box disabled">(ARTICLE EDITOR) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>
    <div class="box disabled">(LOGIN!!!) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>
    <div class="box disabled">(LANGUAGES!!!) <span class="icon php glyphicon glyphicon glyphicon-pushpin"></span></div>

<hr/>



    <div class="box disabled">(Basic CSS)<span class="icon css glyphicon glyphicon-cog"></span></div>
    <div class="box" onclick="window.open('bootstrap.php','_blank')">Bootstrap<span class="icon css glyphicon glyphicon-tags"></span></div>
    <!-- https://webshopmonster.dev/new/index.php -->


<hr/>

    <div class="box disabled" onclick="window.open('','_blank')">(Str Műveletek >>)<span class="icon html glyphicon glyphicon-text-color"></span></div>
    <div class="box" onclick="window.open('converter.php','_blank')">Converter<span class="icon html glyphicon glyphicon-repeat"></span></div>
    <div class="box" onclick="window.open('lorem.php','_blank')">Lorem<span class="icon html glyphicon glyphicon-font"></span></div>
    <div class="box" onclick="window.open('special_characters.php','_blank')">Sp. characters<span class="icon html glyphicon glyphicon-knight"></span></div>
    <div class="box disabled" onclick="window.open('','_blank')">(Notepad>>)<span class="icon html glyphicon glyphicon-repeat"></span></div>

<hr/>


</body>
</html>



