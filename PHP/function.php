<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="" method="post">
    <input type="text" name="num1" id="">
    <input type="submit" value="Submit" name="submit">
 </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $num1=$_POST['num1'];
        findEvenOdd($num1);
        printHello();
        echo "<h1>Array Excample</h1>";
        $a=[7,6,1,2,8,12,3,45,678];
        echo "<pre>";
        print_r($a);
        $sortArray1 = sortArray($a);
        echo "<h1>".findFactorial($num1)."</h1>";
        //($sortArray1);
        test(80);
       // var_export($num1);
    }

    //Basic Function Example
    function printHello(){
        echo "<h1>Hello Tops tech</h1>";
    }


    //Function with parameter
    function findEvenOdd($num){
        $num = (int)$num;
        if($num % 2 ==0){
            echo "<h1>Given number is Even";
        }
        else{
            echo "<h1>Given number is Odd";
        }
    }

    //Function with parameter and return Array
    function sortArray( $a ){
        for($i=0;$i<5;$i++){
            for($j=$i+1;$j<5;$j++){
                if($a[$i]>$a[$j]){
                    $temp=$a[$i];
                    $a[$i]=$a[$j];
                    $a[$j]=$temp;
                }
            }
        }
        print_r($a);
        return $a;
    }

    //Recursive function example to find factorial
    function findFactorial($num){
        $num = isset($num)??1;
        if($num == 1){
            return 1;
        }
        $fact = $num * findFactorial($num-1);
        return $fact;
    }

    //Default parameter exmaple
    function test($a,$b=10){
        echo $a .$b;
    }

?>