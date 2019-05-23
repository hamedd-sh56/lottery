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
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous">
    </script>
    </head>



    <body >
        <div class="ui piled segments size">
                <div class="ui segment">
                        <p>  <div class="ui secondary pointing menu font">
                                <a class="item " href="index.php">
                                  صفحه اول
                                </a>
                                <a class="item active">
                                 قرعه کشی 
                                </a>
                                <a class="item" href="insert.php">
                                  کاربران
                                </a>
                                <div class="right menu" >
                                  <a class="ui item" href="logout.php">
                                   خروج
                                  </a>
                                </div>
                              </div>
                             
                <div class="ui segment">
                  <p><div class="ui teal inverted segment cen">

                  <!-- count of row -->

                  <?php $r=mysql_query("SELECT `id` FROM `users`"); echo mysql_num_rows($r);?>
                          <!-- COUNT(`id` -->
                   </div>
                  </p>
                </div>
                <div class="ui segment dir">
                        <p><div class="ui violet segment">
                                <div class="column">
                                        <div class="ui relaxed divided list">
                                            <h2>افراد حاضر</h2>
                                                <div class="item">
                                                  <!-- <i class="meh large icon"></i> -->
                                                  <div class="content">
                                                    <a class="header">
                                                  
                                                  
                                    <?php
                                    include ("config.php");
                                    $get_query = mysql_query("SELECT * FROM `users` ");
                                    
                                    while ($fetch_result = mysql_fetch_array($get_query))
                                    {
                                    $fname = $fetch_result['F_name'];
                                    $lname = $fetch_result['L_name'];
                                                                    
                                    echo " $fname $lname <hr>";
                                   
                                }   
                                ?>
                                                    </a>
                                                    <div class="description">
                                                        </div>
                                                  </div>
                                                </div>
                                                
                                  </div>
                              </div></p>
                       
                        <button class="fluid ui animated fade button"  id="get" onclick ="disable()" > 
                                 <div class="visible content" id="get">new lottery</div>
                                <div class="hidden content">
                                  new winer is...
                                </div>
                              </div>
                                   <div class="ui segment">
                                        <p id="selected">
                                        <!-- Random select  -->
                                       
                                        </p>
                              
                             
                                </p>
                          </div>
                      </div>
              </div>
              <script type="text/javascript">
               $("#get").click(getdata);
                function getdata(){
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState==4 && this.status ==200){
                        document.getElementById("selected").innerHTML = this.responseText;
                    }
                }
                xhttp.open("GET","random.php",true);
                xhttp.send();
                }
                function disable() {
                  document.getElementById("get").disabled = true;  
                  
                }
                
                                      
              </script>
</body>
</html>