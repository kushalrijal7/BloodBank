<?php 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link rel = "icon" href="images/logo1.png" 
        type = "image/x-icon">
    <title>Blood Bank Management System</title>
</head>
<style>
    .navbar-header .navbar-brand img{
        padding-top: 10px;
        height: 105px;
    }
    .navbar-header h3{
        
        padding-left: 130px;
        color: white;
        font-family: Verdana;
        padding-top: 20px;
        display: block;
    }
</style>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo1.png" width="150" height="100" alt="icon" class="logo-icon"/>
                    
                </a>
                <h3>ONLINE BLOOD BANK MANAGEMENT SYSTEM</h3>
            </div>
            <ul class="nav navbar-nav">
                <li class="d
                
                </li>
            </ul>
            <form class="navbar-form navbar-right action="/action_page.php">
                <div class="input-group">
                
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <?php
                    if (isset($_SESSION['login_user'])) {
                        $name = $_SESSION['login_user'];
                        $encode = base64_encode($name); 
                        echo "<li><a href=\"profile.php?id=$encode\"> Welcome, $name </a></li>";
                        echo "<li><a href=\"classes/logout.php\">Logout</a></li>";
                    }
                    else {
                        $str = "<li>
                                    <a href=\"signup.php\">
                                        <span class=\"glyphicon glyphicon-user\"></span> Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a href=\"login.php\">
                                        <span class=\"glyphicon glyphicon-user\"></span> Donate Blood
                                        
                                    </a>
                                </li>
                                <li>
                                    <a href=\"login.php\">
                                        <span class=\"glyphicon glyphicon-log-in\"></span> Login
                                    </a>
                                <li>
                                  <a href=\"admin\index.php\">
                                        <span class=\"glyphicon glyphicon-user\"></span> Admin View
                                    </a>
                                    </li>
                                   
                                </li>";
                        
                        echo $str;
                    }
                ?>
            </ul>
        </div>
    </nav>
    <!-- Navigation Bar Section Ends -->