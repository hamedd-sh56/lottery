

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

<body>


    <div class="ui piled segments size">
        <div class="ui segment">
            <p>
                <div class="ui secondary pointing menu font">
                    <a class="item " href="profile.php">
                        صفحه اول
                    </a>
                    <a class="item" href="viewer.php">
                        قرعه کشی
                    </a>
                    <a class="item active">
                        کاربران
                    </a>
                    <div class="right menu">
                        <a class="ui item" href="logout.php">
                            خروج
                        </a>
                    </div>
                </div>
                <div class="ui segment">
                    <p>
                        <form class="ui form dir " action="sendpost.php" method="post">
                            <h4 class="ui dividing header font">کاربر جدید</h4>
                           
                            <div class="field">
                                <label>نام و نام خانوادگی</label>
                                <div class="two fields">
                                    <div class="field ">
                                        <input class="font" type="text" name="f-name" placeholder="نام">
                                    </div>
                                    <div class="field">
                                        <input class="font" type="text" name="l-name" placeholder="نام خانوادگی">
                                    </div>
                                </div>
                                <div class="field">
                                    <label>آدرس و تلفن</label>
                                    <div class="fields">
                                        <div class="twelve wide field">
                                            <input class="font" type="text" name="add" placeholder="آدرس">
                                        </div>
                                        <div class="four wide field">
                                            <input class="font" type="text" name="tell" placeholder="تلفن">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input class="fluid ui button font" tabindex="0" type="submit" value="ثبت مطلب">
                            
                        </form>
                        <br>
                        <hr>
                        <br>

                                

                        <div class="ui celled list dir">
                            <div class="item">
                                <div class="content">
                                
                                <div class="header"> 
                                    <?php
                                    include ("config.php");
                                   
                                    $get_query = mysql_query("SELECT DISTINCT * FROM `users` ");
                                    
                                    while ($fetch_result = mysql_fetch_array($get_query))
                                    {
                                    $fname = $fetch_result['F_name'];
                                    $lname = $fetch_result['L_name'];
                                    $add = $fetch_result['add'];
                                    $tell = $fetch_result['tel'];
                                    $postId = $fetch_result['id'];    
                                    
                                   
                                    echo "<h3> $fname $lname</h3>";
                                    echo "<h4>$add | $tell</h4>";
                                    echo " <h4>(<a href=editpost.php?id=$postId>ویرایش</a>) - (<a href=deletepost.php?id=$postId>حذف</a>)</h4><hr>"; 
                                    // echo "<h2><a href=single.php?id=$lname>$fname</a> (<a href=editpost.php?id=$lname>ویرایش</a>)</h2>";        
                                    
                                    
                                }   
                                ?>
                                </div>
                                    <div class="ui celled horizontal list">
                                        <div class="item">
                                   <!-- description 1 -->
                                         </div>
                                        <div class="item">
                                       <!-- description 2 -->
                                        
                                        </div>

                                    </div>
                                
                            
                                </div>

                            </div>                      
                        </div>
                        </div>
                    </p>
                </div>

            </p>
       
        </div>
        
</body>

</html>
