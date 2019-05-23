<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
<title>درج مطلب</title>
<meta charset="utf-8" />
</head>
<body>
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
$Fname = trim ($_POST['f-name']);
$Lname = trim ($_POST['l-name']);
$add = trim ($_POST['add']);
$tell = trim ($_POST['tell']);
if($Fname != "" && $Lname != ""){
//do insert
$query_res = mysql_query("INSERT INTO `users` (`F_name`, `L_name`, `add`, `tel`) VALUES ('$Fname','$Lname','$add','$tell')");
if($query_res){
    
echo "کاربر جدید اضافه شد . <a href=insert.php><br><u>بازگشت</a>";

}else{
    
echo "مشکلی در ثبت مطلب رخ داده، لطفا مجددا تلاش کنید. <a href=insert.php><br><u>بازگشت</a>";
}
}else{
    
echo 'اطلاعات ورودی را بررسی کنید. <a href=insert.php><br><u> بازگشت</a>';
}
?>
</center>
</body>
</html>