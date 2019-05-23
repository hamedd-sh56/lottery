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
//------------------------fetch-----------------
$pid = $_GET['id'];
$get_query = mysql_query("SELECT * FROM `users` WHERE `id` = '$pid' ");

$fetch_result = mysql_fetch_array($get_query);


$lnames= $fetch_result['L_name'];
$fnames= $fetch_result['F_name'];
$add= $fetch_result['add'];
$tell= $fetch_result['tel'];

//--------------------add------------------------


if($fnames != "" && $lnames != ""){
//do insert
$query_res = mysql_query("INSERT INTO `deluser` (`fname`, `lname`, `tell`, `address`) VALUES ('$fnames','$lnames','$tell','$add')");
if($query_res){
    
echo "اطلاعات شما با موفقیت در بانک داده درج شد. <a href=profile.php><br><u>بازگشت</a>";
//---------------------------delete after insert to db----------------------------
$get_query = mysql_query("DELETE FROM `users` WHERE `id` = '$pid' ");

}else{
    
echo "مشکلی در ثبت مطلب رخ داده، لطفا مجددا تلاش کنید. <a href=profile.php><br><u>بازگشت</a>";
}
}else{
    
echo 'برای درج مطلب جدید باید عنوان و متن مطلب را وارد کنید. <a href=profile.php><br><u> بازگشت</a>';
}
?>
