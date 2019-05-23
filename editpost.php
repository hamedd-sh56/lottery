<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=480, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random Select</title>
    <link rel="stylesheet" href="UI/Style.css">
    <link rel="stylesheet" href="UI/semantic.min.css">
    <script src="UI/semantic.min.js"></script>
    <script src="UI/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
</head>
<body >

<?php

include ("config.php");

$pid = $_GET['id'];

//select post that its id = pid

$get_query = mysql_query("SELECT * FROM `users` WHERE `id` = '$pid' ");

$fetch_result = mysql_fetch_array($get_query);


$lnames= $fetch_result['L_name'];
$fnames= $fetch_result['F_name'];
$add= $fetch_result['add'];
$tell= $fetch_result['tel'];

?>

<center class="padd-top">
<div class="ui piled segments size">
        <div class="ui segment">
            <p>
                <div class="ui secondary pointing menu font">
                    <a class="item active" href="profile.php">
                        صفحه اول
                    </a>
                    <a class="item" href="insert.php">
                        برگشت
                    </a>                   
                </div>
<form class="ui form dir "action="editpost2.php" method="post">
                            <h4 class="ui dividing header font">ویرایش کاربران </h4>
                           
                        <div class="field">
                            <label>نام و نام خانوادگی</label>
                            <div class="two fields">
                                <div class="field ">
                                    <input class="font" type="text" name="f-name" placeholder="نام" value="<?php echo $fnames;?>">

                                 </div>
                                    <div class="field">
                                        <input class="font" type="text" name="l-name" placeholder="نام خانوادگی" value="<?php echo $lnames;?>">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>آدرس و تلفن</label>
                                    <div class="fields">
                                        <div class="twelve wide field">
                                            <input class="font" type="text" name="add" placeholder="آدرس" value="<?php echo $add;?>">
                                        </div>
                                        <div class="four wide field">
                                            <input class="font" type="text" name="tell" placeholder="تلفن" value="<?php echo $tell;?>"
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <input type="hidden" name="postID" value="<?php echo $pid;?>">
                            <input class="fluid ui button font" tabindex="0" type="submit" value="ثبت مطلب">
                            
                        </form>
</div>

</center>
</body>
</html>