<?php include_once('../functions/main.php') ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>Dropzone</title>

    <script src="../js/jquery.js"></script>
    <script src="../js/dropzone/dropzone.js"></script>
    <link rel="stylesheet" href="../js/dropzone/dropzone.css">
    <link rel="stylesheet" type="text/css" href="css/info.css">


</head>

<body>

<?php include_once('php/head.php') ?>

<h1 class="effect_cim">Dropzone</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="../js/jquery.js"></script>').'<br/>'.htmlspecialchars('<script src="../js/dropzone/dropzone.js">'); echo '<br/>'.htmlspecialchars('<link rel="stylesheet" href="../js/dropzone/dropzone.css"></script>');?></span><br/><br/>

<!-- ______________________________________________________________________________________________________________________________ -->


<!-- Dropzone Content -->
<style>
    .dropzone{
        border-width: 0px;
        box-shadow:inset 0px 0px 12px rgba(0,0,0,0.5);
        font-size: 24px;
        color:#999;
        text-shadow: 1px 0px 3px rgba(0,0,0,0.3);
        width: 400px;
    }
    #new_files{
        border-width: 0px;
        box-shadow:inset 0px 0px 12px rgba(0,0,0,0.5);
        font-size: 24px;
        color:#999;
        text-shadow: 1px 0px 3px rgba(0,0,0,0.3);
        width: 360px;
        padding: 20px;
    }

</style>
<script>

    /* UPLOAD COMPLETED ......................................................................................................................... */

    function Dropzone_Uploadedfiles(allfiles){
        console.log(allfiles);
        for(i=0;i<allfiles.length;i++){
            //console.log(allfiles[i]);
            console.log(allfiles[i]['name']);
            $('#new_files').append('<span style="font-size:10px; opacity: 1;">'+allfiles[i]['name']+'</span></br>');
            $('#new_files').append('<span style="font-size:10px; opacity: 1;">'+allfiles[i]['name'].split('.').pop()+'</span></br>');
            $('#new_files').append('<img src="../files/dropzone_files/'+allfiles[i]['name']+'" style="width:100px;"/>');
        }
    }

    /* DROPZONE BASIC ......................................................................................................................... */

    Dropzone.options.DropzoneForm= {
        url: $(this).attr('action'),
        autoProcessQueue: true,
        uploadMultiple: true,
        parallelUploads: 10,
        maxFiles: 100,
        maxFilesize: 10, /* MB */
        acceptedFiles: '.jpg,.jpeg,.png,.gif', /* .jpg,.jpeg,.png,.gif | .txt,.pdf,.doc,.docx,.xls,.xlsx */
        addRemoveLinks: false,
        init: function() {
            dzClosure = this;
            allfiles = this.files;

            this.on("sendingmultiple", function(data, xhr, formData) {
                //console.log('sending');
            });

            this.on("queuecomplete", function (a,b) {
                Dropzone_Uploadedfiles(allfiles);
            });
        }
    }

    /* ............................................................................................................................................ */

</script>

<form class="dropzone" id="DropzoneForm" action="../php/dropzone_upload/dropzone_upload.php"  enctype="multipart/form-data" method="POST">
    <input id="DropUploadDir" type="hidden" name="upload_folder" value="/../../files/dropzone_files/"/>
    <div class="dz-message" data-dz-message><span>Click or Drag&Drop</span></div>
</form>
<div id="new_files" style="opacity: 0.5;"></div>


<h2>Dropzone Clone</h2>
<p class="effect_leiras">
    <b>Fájltípusok</b> a js függvényben az "acceptedFiles" paraméterben kell beállítani <br/><br/>
    <b>Feltöltési mappa</b> a formon belül az "DropUploadDir" inputban kell a value paraméterben beállítani. <br/><br/>
    <b>Feltöltés feldolgozása</b> a "function Dropzone_Uploadedfiles(allfiles)" felel a sikeresen feltöltött fájlok utólagos feldolgozásáért (név, kiterjesztés, megjelenítés). <br/><br/>
</p>
<pre style="background-color: #EEE; color:#666;">
    <?php

    echo htmlspecialchars('
            <!DOCTYPE html>
            <html>
            <head>
            
                <meta charset="utf-8">
                <title>Dropzone</title>
            
                <script src="../js/jquery.js"></script>
                <script src="../js/dropzone/dropzone.js"></script>
                <link rel="stylesheet" href="../js/dropzone/dropzone.css">
            
            </head>
            <body>
            
            
            <!-- Dropzone Content -->
            <style>
                .dropzone{
                    border-width: 0px;
                    box-shadow:inset 0px 0px 12px rgba(0,0,0,0.5);
                    font-size: 24px;
                    color:#999;
                    text-shadow: 1px 0px 3px rgba(0,0,0,0.3);
                    width: 400px;
                }
                #new_files{
                    border-width: 0px;
                    box-shadow:inset 0px 0px 12px rgba(0,0,0,0.5);
                    font-size: 24px;
                    color:#999;
                    text-shadow: 1px 0px 3px rgba(0,0,0,0.3);
                    width: 360px;
                    padding: 20px;
                }
            
            </style>
            <script>
            
                /* UPLOAD COMPLETED ......................................................................................................................... */
            
                function Dropzone_Uploadedfiles(allfiles){
                    console.log(allfiles);
                    for(i=0;i<allfiles.length;i++){
                        //console.log(allfiles[i]);
                        console.log(allfiles[i][\'name\']);
                        $(\'#new_files\').append(\'<span style="font-size:10px; opacity: 1;">\'+allfiles[i][\'name\']+\'</span></br>\');
                        $(\'#new_files\').append(\'<span style="font-size:10px; opacity: 1;">\'+allfiles[i][\'name\'].split(\'.\').pop()+\'</span></br>\');
                        $(\'#new_files\').append(\'<img src="../files/dropzone_files/\'+allfiles[i][\'name\']+\'" style="width:100px;"/>\');
                    }
                }
            
                /* DROPZONE BASIC ......................................................................................................................... */
            
                Dropzone.options.DropzoneForm= {
                    url: $(this).attr(\'action\'),
                    autoProcessQueue: true,
                    uploadMultiple: true,
                    parallelUploads: 10,
                    maxFiles: 100,
                    maxFilesize: 10, /* MB */
                    acceptedFiles: \'.jpg,.jpeg,.png,.gif\', /* .jpg,.jpeg,.png,.gif | .txt,.pdf,.doc,.docx,.xls,.xlsx */
                    addRemoveLinks: false,
                    init: function() {
                        dzClosure = this;
                        allfiles = this.files;
            
                        this.on("sendingmultiple", function(data, xhr, formData) {
                            //console.log(\'sending\');
                        });
            
                        this.on("queuecomplete", function (a,b) {
                            Dropzone_Uploadedfiles(allfiles);
                        });
                    }
                }
            
                /* ............................................................................................................................................ */
            
            </script>
            
            <form class="dropzone" id="DropzoneForm" action="../php/dropzone_upload/dropzone_upload.php"  enctype="multipart/form-data" method="POST">
                <input id="DropUploadDir" type="hidden" name="upload_folder" value="/../../files/dropzone_files/"/>
                <div class="dz-message" data-dz-message><span>Click or Drag&Drop</span></div>
            </form>
            <div id="new_files" style="opacity: 0.5;"></div>
            
            </body>
            </html>

    
    ')

    ?>

</pre>

<div class="effect_elvalaszto" ></div>

<!-- ______________________________________________________________________________________________________________________________ -->


<pre></pre>

</body>
</html>

