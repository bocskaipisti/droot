<?php


    ################################################################################

        $ge_image_folder = 'image/gallery';
        $ge_image_height = '120px';

        $ge_image_margin = '12px 10px';
        $ge_image_padding = '10px';

    ################################################################################


        include_once('../functions/main.php');
        include_once('../php/file_operations.php');

    # Fájlok listázása ..............................................................................................


        $ge_image_list = array();
        $ge_filetypes = "jpg, jpeg, png, gif, JPG, JPEG, PNG, GIF";

        $ge_image_list = file_list($ge_image_folder,$ge_filetypes);



    # Teszt ..............................................................................................

        #print_r($ge_image_list);


?>


<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Gallery - Drag&Save</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <!-- SORT -->         <script src="../js/sorting.js" ></script>
    <!-- GALLERY FUNCTIONS -->         <script src="../js/gallery.js" ></script>

    <link rel="stylesheet" type="text/css" href="css/info.css">


    <script>
        $(function () {
            $( ".sortable" ).sortable({cursor: "move"});

            $( ".sortable" ).sortable({
                sort: function( event, ui ) {
                    //console.log(this);
                    //$(this).css('opacity','0.5');
                }
            });

            $( ".sortable" ).sortable({
                start: function( event, ui ) {
                    //console.log(this);
                    //console.log(event);
                    //console.log(ui);
                }
            });

            $( ".sortable" ).sortable({
                stop: function( event, ui ) {
                    $image_list_str = '';
                    $('.ge_image').each(function () {
                        $image_list_str += $(this).attr('src')+'|';
                    })
                    console.log($image_list_str);
                    //console.log(this);
                    //console.log(event);
                    //console.log(ui);
                }
            });
        })

    </script>
    <style>
        .sortable { list-style-type: none; margin: 0; padding: 0; width: 100%; cursor:default; position: relative; display: block; overflow: hiddenn; text-align: center; }
        .sortable li {
            margin: <?=$ge_image_margin?>; padding: <?=$ge_image_padding?>; float: left; height: <?=$ge_image_height?>; font-size: 4em; text-align: center;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }


        .ge_image{
            max-height: <?=$ge_image_height?>;
        }
    </style>



</head>

<body>

<?php include_once('php/head.php') ?>

<h1 class="effect_cim">Gallery + Drag&Save</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="js/...js" ></script>');?></span><br/><br/>

<!-- ______________________________________________________________________________________________________________________________ -->

<br/>
<br/>
<br/>
<br/>


<h2>Cím</h2>
<p class="effect_leiras">
    <b>Alcím</b> leírás.... <a href="http://api.jqueryui.com/sortable/#event-start">sortable leírás</a><br/><br/>
    <b>Alcím</b> leírás.... <br/><br/>
</p>


<div style="position: relative; display: block; height:auto; text-align: center;">
<ul class="sortable" >
    <?php

        foreach ($ge_image_list as $il){
            $src = $ge_image_folder.'/'.$il;
            echo '<li class="ui-state-default ge_image_li"><img class="ge_image" src="'.$src.'" /></li>';
        }

    ?>

</ul>
</div>


<br/>
<br/>
<br/>
<br/>



<!-- ______________________________________________________________________________________________________________________________ -->


</body>
</html>