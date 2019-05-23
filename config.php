<?php
$dbhost = "localhost";
$dbuser = "root";
$dbname = "random-select";
$dbpass = "";

$connect_db = mysql_connect ($dbhost, $dbuser, $dbpass);
mysql_set_charset('utf8',$connect_db);
mysql_select_db($dbname,$connect_db);
?>
