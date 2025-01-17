<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin:100px;
            border:3px solid black;
            padding: 30px;
            width: 50%;
        }
    </style>
</head>
<body>
    <form method="post">
        <h1>Check Given number is Even or Odd</h1>
        <label for="">Enter the number</label>
        <input type="text" name="num" id="">
        <input type="submit" value="Submit" name="submit">
        <br>
        <?php
    if(isset($_POST['submit'])){
        $num = $_POST['num'];
        if($num % 2==0){
            echo "Given number is Even";
        }
        else{
            echo "Given number is odd";
        }
    }
    
?>
    </form>
    <form method="post">
        <h1>Find Quadrant </h1>
        <label for="">Enter X value</label>
        <input type="text" name="x" id="">
        <label for="">Enter Y value</label>
        <input type="text" name="y" id="">
        <input type="submit" value="Submit" name="findqudrant">
        <br>
        <?php
            if(isset($_POST['findqudrant'])){
                $x=$_POST['x'];
                $y=$_POST['y'];
        
                if($x > 0 && $y > 0){
                    echo "Points lies on First Quadrant";
                }
                else if($x < 0 && $y >0){
                    echo "Points lies on Second Quadrant";
                }
                else if($x <0 && $y <0){
                    echo "Points lies on third Quadrant";
                }
                else if($x > 0 && $y <0){
                    echo "Points lies on Forth  Quadrant";
                }
                else{
                    echo "Points lies on center lines";
                }
            }
        ?>
    </form>
    <form method="post">

        <h1>Simple Calculator</h1>
        <p>press 1 for Addition <br>press 2 for Substraction <br>press 3 for Multiplication <br>press 4 for Division <br></p>
        <label for="">Enter First value</label>
        <input type="text" name="num1" id="">
        <br><br>
        <label for="">Enter Second  value</label>
        
        <input type="text" name="num2" id="">
        <br><br>
        <label for="">Enter Your Choice</label>
        
        <input type="text" name="ch" id="">
        <br>
        <br>
        <input type="submit" value="Submit" name="calc">
        <br>
        <?php
            if(isset($_POST['calc'])){
                $a=$_POST['num1'];
                $b=$_POST['num2'];
                $choice=$_POST['ch'];
                switch($choice){

                    case 1:
                        echo "Addition:".$a+$b;
                    break;
                    case 2:
                        echo "Substraction=:".$a-$b;
                    break;
                    case 3:
                        echo "Multiplication:".$a*$b;
                    break;
                    case 4:
                        echo "Division:".$a/$b;
                    break;
                    default:
                        echo "Wrong choice";
                    exit;    
                }
            }
        ?>
    </form>    
</body>
</html>
