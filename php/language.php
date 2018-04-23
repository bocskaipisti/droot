<?php

    $language = Array();
    $language_by_location = Array();
    $language['id']=1; // Basicly 1st language (en)

    $browser_langs= explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $first_supported_lang = $browser_langs[0];
    $first_supported_lang = explode(';',$first_supported_lang)[0];
    $first_supported_lang = explode('-',$first_supported_lang)[0];

// Language info from db ...............................................................................................

    $language_db = db_array('SELECT * FROM languages WHERE iso="'.$first_supported_lang.'" ')[0];


// Lang from cookie ....................................................................................................

    if(isset($_COOKIE['language'])){
        $lang=htmlspecialchars($_COOKIE['language']);
    }else{
        //supported languages list, from browser
        setcookie('language',$language['id']);
        $_SESSION['language']=$language['id'];
    }


// Lang array + db .....................................................................................................

    $language['id']=$language_db['id'];
    $language['name']=$language_db['name'];
    $language['iso']=$language_db['iso'];

// .....................................................................................................................




    KEK($language);



?>