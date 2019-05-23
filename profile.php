<?php
include('session.php');
?>
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
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="UI/Style.css">
</head>

<body>
  <div class="ui piled segments size">
    <div class="ui segment">
      <p>
        <div class="ui secondary pointing menu font">
          <a class="item active" href="index.php">
            صفحه اول
          </a>
          <a class="item" href="viewer.php">
            قرعه کشی
          </a>
          <a class="item" href="insert.php">
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
            <!-- <div class="ui equal width grid"> -->

              <div class="equal width row">
                <!-- left -->
                <div class="column">
                  <div class="ui relaxed divided list">
                    <h2 class="font">حذف شده</h2>
                    <div class="item">
                      <!-- <i class="meh large icon"></i> -->
                      <div class="content">
                        <div class="header">
                        <?php
                                    include ("config.php");
                                    $get_query = mysql_query("SELECT * FROM `deluser` ");
                                    
                                    while ($fetch_result = mysql_fetch_array($get_query))
                                    {
                                    $namef = $fetch_result['fname'];
                                    $namel = $fetch_result['lname'];
                                                                    
                                    echo "    | $namef $namel | <hr> ";
                                   
                                     
                                }   
                               ?>                                 
                        </a>
                        <div class="description">
                        <a href="delall.php">حذف همه </a>
                        
                        </div>
                      </div>
                    </div>
                    
                </div>
                <!-- right -->
                <div class="line"> </div>
                <div class="column">
                  <div class="ui relaxed divided list font ">
                    <h2 class="font">باقی مانده</h2>
                    <div class="item">
                      <!-- <i class="check icon "></i> -->
                      <div class="content">
                        <div class="header">
                        <?php
                                    include ("config.php");
                                    $get_query = mysql_query("SELECT * FROM `users` ");
                                    
                                    while ($fetch_result = mysql_fetch_array($get_query))
                                    {
                                    $fname = $fetch_result['F_name'];
                                    $lname = $fetch_result['L_name'];
                                                                    
                                    echo "    | $fname $lname  | <hr>  ";
                                   
                                     
                                    
                                    
                                }   
                                ?>

                        </a>
                        <div class="description">
                        <a href="delalluser.php">حذف همه </a>
                         </div>
                      

                          </div>
                        </div> 
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
          </p>
        </div>
        

</body>

</html>