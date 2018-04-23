<?php include_once('../functions/main.php');
include_once("../functions/php_database.php");?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>✤ DB CREATE</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">


</head>

<body>

<?php
    include_once('php/head.php');

?>


<h1 class="effect_cim">Főcím</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="js/...js" ></script>');?></span><br/><br/>

<!-- ______________________________________________________________________________________________________________________________ -->

<h1>Cím</h1>
<p class="effect_leiras">
    <b>Alcím</b> leírás.... <br/><br/>
    <b>Alcím</b> leírás.... <br/><br/>
</p>
<div class="effect_elvalaszto_kek" ></div>

<!-- ______________________________________________________________________________________________________________________________ -->

<?php

    # ... GALLERY .........................................................................................................................................

        $GALLERY = '
                SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
                SET AUTOCOMMIT = 0;
                START TRANSACTION;
                SET time_zone = "+00:00";
                /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
                /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
                /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
                /*!40101 SET NAMES utf8mb4 */;
                CREATE TABLE `gallery_db` (
                  `id` int(11) NOT NULL,
                  `group` varchar(100) NOT NULL,
                  `name` varchar(128) NOT NULL,
                  `path` varchar(128) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
                  `description` text NOT NULL,
                  `additional` varchar(32) NOT NULL,
                  `order` int(11) NOT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
                ALTER TABLE `gallery_db`
                  ADD PRIMARY KEY (`id`);
                ALTER TABLE `gallery_db`
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
                COMMIT;
                /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
                /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
                /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
        ';

        db_query($GALLERY);

?>




<pre></pre>

</body>
</html>
