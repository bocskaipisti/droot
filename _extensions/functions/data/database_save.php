<?php

    include_once(__DIR__.'/../php_basic.php');

    $message = 'error';

    if(isset($_REQUEST['host'])){

        $HOST = $_REQUEST['host'];
        $USER = $_REQUEST['user'];
        $PW = $_REQUEST['pw'];
        $TABLE = $_REQUEST['dbname'];
        $PORT = $_REQUEST['dbport'];

        if(!($HOST==''&&$USER==''&&$TABLE=='')){

            $data = '<?php define("DATABASE_HOST", "'.$HOST.'"); define("DATABASE_USER", "'.$USER.'"); define("DATABASE_PW", "'.$PW.'"); define("DATABASE_NAME", "'.$TABLE.'"); define("DATABASE_PORT", "'.$PORT.'"); ?>';
            $fp=fopen(__DIR__.'/database_reach.inc','w');
            fwrite($fp, $data);
            fclose($fp);

            $_REQUEST['test']=1;
            include_once(__DIR__.'/../php_database.php');
            if(isset($db_active)){
                $message = 'cool';
            }
        }
    }

echo $message;

?>