<?php

    include_once ('head.php');
    if(isset($_REQUEST['text'])){
        echo htmlspecialchars($_REQUEST['text']);
    }

?>