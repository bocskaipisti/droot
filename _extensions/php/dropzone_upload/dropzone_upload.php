<?php

if(!empty($_FILES)){
    $targetDir = __DIR__.$_REQUEST['upload_folder'];
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $_POST["default_pic"] = $_FILES["file"]["name"][0];

    $myfiles = array();
    foreach(array_keys($_FILES["file"]['name']) as $i) { // loop over 0,1,2,3 etc...
        foreach(array_keys($_FILES["file"]) as $j) { // loop over 'name', 'size', 'error', etc...
            $myfiles[$i][$j] = $_FILES["file"][$j][$i]; // "swap" keys and copy over original array values
        }
    }

    $myimages = array();
    $filelist = '';
    foreach($myfiles as $single_image) {
        $extension = pathinfo($single_image["name"], PATHINFO_EXTENSION);
        $file = $single_image["name"];
        $targetFile = $targetDir.basename($file);
        if (move_uploaded_file($single_image["tmp_name"], $targetFile)){
            //$myimages[] = array("cover" => ($_POST['default_pic'] == $img ? "1" : "0"), "img" => $img_name);
        }
        $filelist .= $file.'|';
    }

    echo rtrim($filelist, "|");
}

?>