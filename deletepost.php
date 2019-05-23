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
$pid = $_GET['id'];
//delete query
$get_query = mysql_query("DELETE FROM `users` WHERE `id` = '$pid' ");
if($get_query){
echo "حذف مطلب مورد نظر با شناسه $pid با موفقیت انجام شد.<a href=insert.php><br><u>بازگشت</a>";
}else{
echo "مشکلی  رخ داده است.";
}

?>
</center>


</body>

</html>