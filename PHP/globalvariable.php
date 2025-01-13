<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>$GLOBAL varible example</h1>
    <?php
    $username="Megha";
    echo $GLOBALS['username'];
    ?>
    <h1>$_GET example</h1>
    <form method="get">
    <input type="submit" value="submit" name="submit">
    <input type="text" name="username" id="">
    </form>
    <?php
    if(isset($_GET['submit'])){
        echo "Get method data";
    }
    ?>
    <h1>$_POST example</h1>
    <form method="post">
    <input type="submit" value="submit" name="submit">
    <input type="text" name="username" id="">
    </form>
    <?php
    if(isset($_POST['submit'])){
        echo "Post method data";
    }
    ?>
     <h1>$_REQUEST example</h1>
    <form method="post">
    <input type="submit" value="submit" name="submit">
    <input type="text" name="username" id="">
    </form>
    <?php
    if(isset($_REQUEST['submit'])){
        echo "Request method data";
    }
    
    ?>
    <h1>$_SERVER example </h1>
    <h2>$_SERVER['PHP_ITSELF']====><?php echo $_SERVER['PHP_SELF'];?></h2>
    <h2>$_SERVER['SERVER_NAME']====><?php echo  $_SERVER['SERVER_NAME'];?></h2>
    <h2>$_SERVER['HTTP_HOST'];====><?php echo $_SERVER['HTTP_HOST'];?></h2>
    <h2>$_SERVER['HTTP_USER_AGENT']====><?php echo $_SERVER['HTTP_USER_AGENT'];?></h2>
    <h2>$_SERVER['REQUEST_URI']====><?php echo $_SERVER['REQUEST_URI'];?></h2>
    
    

</body>
</html>