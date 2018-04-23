<?php
    include_once('../functions/main.php');
    include_once('../functions/login_logout.php');


    //

    $USERS_DB = "

SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = \"+00:00\";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `users_db` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `newsletter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users_db` ADD UNIQUE(`email`);

ALTER TABLE `users_db`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
";

    db_query($USERS_DB);


    $INSERT = "INSERT INTO `users_db` (`id`, `name`, `email`, `password`, `reg_date`, `active`, `deleted`, `newsletter`) VALUES (NULL, 'admin', 'alma2@alma.com', MD5('almajelszo'), CURRENT_TIMESTAMP, '1', '0', '0')";
    db_query($INSERT);
    KEK(db_error());


?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>✤ Login/Logout form</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">


</head>

<body>

<?php include_once('php/head.php') ?>

<h1 class="effect_cim">Login & Logout</h1><span class="effect_leiras_source"><?php echo htmlspecialchars('<script src="js/...js" ></script>');?></span><br/><br/>

<!-- ______________________________________________________________________________________________________________________________ -->

<h1>Cím</h1>
<p class="effect_leiras">
    <b>Alcím</b> leírás.... <br/><br/>
    <b>Alcím</b> leírás.... <br/><br/>


<br/><br/><br/>

    <b>Adattábla</b> tartalamzza a következőket: <span style="color:#9AF; font-weight: bold">id, name, email, password, reg_date, active, deleted, newsletter </span><br/><br/>

    <pre class="code">

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `users_db` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `newsletter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users_db` ADD UNIQUE(`email`);
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

    </pre>



</pre>
<div class="effect_elvalaszto_kek" ></div>

<!-- ______________________________________________________________________________________________________________________________ -->


<pre></pre>

INSERT INTO `users_db` (`id`, `name`, `email`, `password`, `reg_date`, `active`, `deleted`, `newsletter`) VALUES (NULL, 'admin', 'alma@alma.com', MD5('almajelszo'), CURRENT_TIMESTAMP, '1', '0', '0');


</body>
</html>
