<!DOCTYPE html>

<html dir="rtl" lang="fa-IR">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=480, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random Select</title>

    <link rel="stylesheet" href="UI/semantic.min.css">
    <script src="UI/semantic.min.js"></script>
    <script src="UI/script.js"></script>
    <script src="UI/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="UI/Style.css">
</head>

<body>
<div class="ui piled segments size">
    <div class="ui segment">
      <p>
        <div class="ui secondary pointing menu font">
          <a class="item active" href="profile.php">
            صفحه اول
          </a>
          
          
          
        </div>
<center>

<?php

include ("config.php");
$newfname = trim ($_POST['f-name']);
$newlname = trim ($_POST['l-name']);
$newadd = trim ($_POST['add']);
$newtell = trim ($_POST['tell']);

$pid = $_POST['postID'];
if($newfname != "" && $newlname != ""){
//do insert
$query_res = mysql_query("UPDATE `users` SET `F_name` = '$newfname', `L_name` = '$newlname', `add` = '$newadd', `tel` = '$newtell' WHERE `id` = '$pid'");
if($query_res){
echo "ویرایش انجام شد . <br> <a href=insert.php><br><u>بازگشت</a>";
}else{
echo "مشکلی   رخ داده است.  ";
}
}else{
echo '<a href=insert.php>لیست مطالب</a>';
}
?>








</center>
</body>
</html>