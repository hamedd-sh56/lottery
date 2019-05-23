<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
<title>مشاهده پست</title>
<meta charset="utf-8" />
</head>
<body style="font-family: tahoma; font-size:14px;">

<center>

<?php

include ("config.php");
$postId = $fetch_result['L_name'];
//select all records from posts table
$get_query = mysql_query("SELECT * FROM `users` WHERE `L_name` = '$pid' ");
$fetch_result = mysql_fetch_array($get_query);
$fname = $fetch_result['F_name'];
$lname = $fetch_result['L_name'];
$add = $fetch_result['add'];
$tell = $fetch_result['tel'];
echo "<h2>$fname</h2><h2>$lname</h2>";
echo "<p> $tell</p><hr>";

?>
</center>
</body>
</html>

