<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="">Enter first value</label>
        <input type="text" name="num1" id="">
        <br>
        <br>
        <label for="">Enter sec value</label>
        <input type="text" name="num2" id="">
        <br>
        <br>
        <input type="submit" value="Submit" name="submit">

    </form>
    <?php
        if(isset($_POST['submit'])){
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            $sum=$num1+$num2;
            $sub=$num1-$num2;
            echo "here";
            echo "<p>Addition=".$sum." <br> Substraction=".$sub."</p>";
            echo "<h1>Ternary operator = find max number</h1><br>";
            echo ($num1>$num2)?"num1 is greter":"num2 is greater";
        }

?>

</body>
</html>
