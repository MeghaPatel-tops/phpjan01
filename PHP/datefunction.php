<?php
date_default_timezone_set("Asia/Kolkata");
echo date("D-m-y : H:i:s");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php 
    echo "<pre>";
    $date = date_create(date("Y-m-d"));
    echo date_format($date,"d-M-y");
    print_r(date_parse("20-01-2024"));
    print_r(getdate());
    ?></h1>
    <fieldset>
        <form action="" method="post">
        <legend>Date Diff Finder</legend>
        <input type="date" name="date1" id="">
        <br>
        <br>
        <input type="date" name="date2" id="">
        <br>
        <br>
        <input type="submit" value="submit" name="submit">

        </form>
    </fieldset>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $date1=date_create($_POST['date1']);
        $date2=date_create($_POST['date2']);
        echo $newdate = date("d-m-Y",mktime(0,0,0,1,2,1990));
        
        $datediff = date_diff($date2,$date1);
        echo $datediff->format("%R%a days");

    }

?>