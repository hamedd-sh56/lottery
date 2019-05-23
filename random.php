 <?php
                                      
                                        include ("config.php");
                                        $get_query = mysql_query(" SELECT * FROM `users` ORDER BY RAND() LIMIT 1");

                                        while ($fetch_result = mysql_fetch_array($get_query))
                                        {
                                        $fname = $fetch_result['F_name'];
                                        $lname = $fetch_result['L_name'];
                                        $tell =  $fetch_result['tel'];
                                        $postId = $fetch_result['id'];

                                         echo "$fname $lname <br> " ;
                                         echo "$tell  <br>";
                                         echo "<a href=sendtodel.php?id=$postId>حذف از جدول افراد حاضر  </a><br>";
                                        
                                        }   
                                        
                                      
                                      ?>  