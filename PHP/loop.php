<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            margin:100px;
            padding: 30px;
            border:5px solid black;
        }
    </style>
</head>
<body>
    <div>
        <h1>While Example</h1>
        <form method="post">
        <h1>Check Given number is Even or Odd</h1>
        <label for="">Enter the number</label>
        <input type="text" name="num" id="">
        <input type="submit" value="Submit" name="submit">
        <br>
        <?php
            if(isset($_POST['submit'])){
                $num = $_POST['num'];
                $rev=0;
                while($num != 0){
                    $rem = $num%10;
                    $rev=$rev*10+$rem;
                    $num = (int)($num/10);
                }
                echo "Reverse number =".$rev;
            }              
        ?>
    </div>
    <div>
        <h1>For Loop Example</h1>
        <form method="post">
        <h1>Check Given number is Even or Odd</h1>
        <label for="">Enter the number</label>
        <input type="text" name="num" id="">
        <input type="submit" value="Submit" name="submit">
        <br>
        <?php
            if(isset($_POST['submit'])){
                $num = $_POST['num'];
                for($i=1;$i<=10;$i++){
                    
                        echo "<p>";
                        echo $num ."*" .$i ."=".$num*$i;
                        echo "</p>";
                   
                }
            }    
        ?>
    </div>
    <div>
        <h1>ForEach Loop Example</h1>
        <?php
            $subject = ["php","java",".net","python"];
            echo 'Printing given array using foreach loop ["php","java",".net","python"]';
            echo "<br><pre>";
            print_r($subject);
            foreach($subject as $key){
                echo "<p>".$key."</p>";
            }
        ?>
    </div>
</body>
</html>