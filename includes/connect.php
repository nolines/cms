<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','cms');
$connection = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die (mysql_error());
mysql_select_db(DB_NAME) or die(mysql_error());

?>
