<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
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
    <script src="UI/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="UI/Style.css">

</head>

<body>
    <div class="bg-pic">
        <div class="padd-top ">


        </div>
        <div class="padd-top center">
            <div class="ui link cards  ">
                <div class="card">
                    <div class="content">
                        <h2 class=" ui center aligned icon header">
                            <i class="circular users icon"></i>
                            Login
                            <br>
                        </h2>
                        <form action="" method="post">
                        <div class="description">
                            <div class="column">
                                <div class="ui form">
                                    <div class="field">
                                        <label>Username</label>
                                        <div class="ui left icon input">
                                            <input id="name" name="username" type="text" placeholder="Username">
                                            <i class="user icon"></i>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Password</label>
                                        <div class="ui left icon input">
                                            <input id="password" name="password" name="password" placeholder="Password">
                                            <i class="lock icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="extra content padd-top center">
                                <div class="ui buttons ">
                                <input class="fluid ui positive button" name="submit" type="submit" value=" Login ">
                                    
                                    <!-- <a class="dec" href="index.html"><button class="ui positive button">Login</button></a> -->
                                    <!-- <div class="or"></div>
                                    <button class="ui  button" ><a href="index.html">Back</a></button> -->
                                </div>
                                <hr>
                                <span><?php echo $error; ?></span>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>

</html>