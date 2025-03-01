<?php
include('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


    </style>
</head>
<body>
    <div class="background">
        <h1>Welcome To Home Page:
            <?php if(isset($_SESSION['user'])){
                echo $_SESSION['user']->username;
            }
            ?>
        </h1>
        <li><a href="logout.php">Logout</a></li>
    </div>
   
</body>
</html>
