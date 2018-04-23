<?php

$V = db_array('SELECT * FROM `user` ORDER BY `user_id` DESC')[0]['password'];

KEK($V);
KEK(sha1('Pandora9'));

?>