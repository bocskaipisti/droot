<?php


    header("Pragma: no-cache");
    header("Cache-Control: no-transform, no-store, no-cache, must-revalidate, post-check=0, pre-check=0");

    include_once(__DIR__.'/data/database_reach.inc');
    $error_array = array();
    $db_active = 0;
    $conn = '';

// CONNECTION ...........................................................................................


        $conn = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PW, DATABASE_NAME, DATABASE_PORT);
        if ($conn->connect_errno) {
            if(!isset($_REQUEST['test'])){
                echo $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
                header('Location: '.$actual_link.'/../../functions/data/database_actual.php'); exit();
                echo '<script>window.open("data/database_actual.php","_self")</script>';
                $error_array[]= "DB_ERROR: ".$conn->connect_errno." - ".$conn->connect_errno;
                echo '<script>console.log("DB_ERROR: '.$conn->connect_errno.' - '.$conn->connect_error.'")</script>';
                exit();
            }
        }else{
            $db_active = 1;
        }


// QUERY ...........................................................................................

    function db_query($query){
        global $conn; global $error_array;
        $ret_array = array();
        if ($result = $conn->multi_query($query)) { return $result; }
        else{ $error = $conn->error; $error_array[]= "DB_ERROR: ".$error." >>> SQL: ".$query; return '<script>console.log("DB_ERROR: '.$error.' >>> SQL: '.$query.'")</script>';}
    }

// ARRAY ...........................................................................................

function db_array($query){
    global $conn; global $error_array;
    $ret_array = array();
    if ($result = $conn->query($query)) {
        while ($row = $result->fetch_assoc()) { $ret_array[]=$row; }
        $result->close();
        return $ret_array;
    }
    else{
        $error = $conn->error; $error_array[]= "DB_ERROR: ".$error." >>> SQL: ".$query;
        return '<script>console.log("DB_ERROR: '.$error.' >>> SQL: '.$query.'")</script>';
    }
}

// ONE VALUE ...........................................................................................

    function db_oneValue($query){
        global $conn; global $error_array;
        if ($result = $conn->query($query.' limit 1')) {
            while ($row = $result->fetch_assoc()) {
                $result->close();
                return $first_value = reset($row);
            }
            $result->close();
            return '';
        }
        else{
            $error = $conn->error; $error_array[]= "DB_ERROR: ".$error." >>> SQL: ".$query;
            return '<script>console.log("DB_ERROR: '.$error.' >>> SQL: '.$query.'")</script>';
        }
    }

// ONE ROW ...........................................................................................

    function db_oneRow($query){
        global $conn; global $error_array;
        $ret_array = array();
        if ($result = $conn->query($query.' limit 1')) {
            while ($row = $result->fetch_assoc()) {
                return $row;
            }
            $result->close();
            return $ret_array;
        }else{
            $error = $conn->error; $error_array[]= "DB_ERROR: ".$error." >>> SQL: ".$query;
            return '<script>console.log("DB_ERROR: '.$error.' >>> SQL: '.$query.'")</script>';
        }
    }

// NEXT ID ...........................................................................................

    function db_nextId($tablename){
        global $conn; global $error_array;
        return db_oneValue('SELECT AUTO_INCREMENT FROM information_schema.tables WHERE table_name = "'.$tablename.'" ' );
    };



// QUERY TO TABLE ...........................................................................................

    function db_arrayToTable($array){
        global $conn; global $error_array;
        if (isset($array[0])) {
            echo '<div style="dispaly:table; border-collapse: collapse; color:#666;  ">' . "\r\n";
            echo '<div style="display:table-row; font-weight:bold;">' . "\r\n";
            foreach (array_keys($array[0]) as $AK) {
                echo '<div style="position:relative; display:table-cell; padding:10px; border:0px #CCC solid; box-shadow: inset 0px 0px 8px rgba(0,0,0,0.5);">' . $AK . '</div>' . "\r\n";
            }
            echo '</div>' . "\r\n";

            foreach ($array as $VAL_A) {
                echo '<div style="display:table-row;">' . "\r\n";
                foreach ($VAL_A as $VAL) {
                    echo '<div style="display:table-cell; padding:10px; border:0px #CCC solid; box-shadow: inset 0px 0px 8px rgba(0,0,0,0.5);">' . $VAL . '</div>' . "\r\n";
                }
                echo '</div>' . "\r\n";
            }
            echo '</div>' . "\r\n";
        }
        else{
            $error = $conn->error; $error_array[]= "DB_ERROR: ".$error." >>> SQL: ".$query;
            return '<script>console.log("DB_ERROR: '.$error.' >>> SQL: '.$query.'")</script>';
        }
    }

// ROWCOUNT ...........................................................................................

    function db_rowCount($query){
        global $conn; global $error_array;
        $ret_array = array();
        if ($result = $conn->query($query)) {
            return $result->num_rows;
        }else{
            $error = $conn->error; $error_array[]= "DB_ERROR: ".$error." >>> SQL: ".$query;
            return '<script>console.log("DB_ERROR: '.$error.' >>> SQL: '.$query.'")</script>';
        }
    }


// ERROR ...........................................................................................

    function db_error(){
        global $conn; global $error_array;
        if(count($error_array)==0){
            print_r('✶✶✶ NO DB ERROR ✶✶✶');
        }else{
            print_r($error_array);
        }
    }


// UNIQ ...........................................................................................

    function db_uniqid(){
        return floor(str_replace(' ','',microtime()) * rand());
    }


// CLOSE ...........................................................................................

    function db_close(){
        global $conn;
        $conn->close();
    }





// TEST ...........................................................................................

    //db_error();



?>