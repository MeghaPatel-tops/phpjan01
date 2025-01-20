<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* div{
            margin:100px;
            padding: 30px;
            border:5px solid black;
        }*/
        .chess{
            height:400px;
            width: 400px;
            margin-left:100px;
            margin-top:100px;
            border:2px solid black;
            
        } 
        .blackdiv{
            height:50px;
            width: 50px;
            background-color:black; 
            color:white;
            float:left;
        }
        .whitediv{
            height:50px;
            width: 50px;
            background-color:white;
            color:black;
            float:left;
        }
    </style>
</head>
<body>
    <!-- <div>
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
    </div> -->
    <div class="chess">
            <?php
                $c=0;
                for($i=1;$i<=8;$i++){
                    for($j=1;$j<=8;$j++){
                        if($c%2==0 ){
                            //echo "<div class='blackdiv'></div>";
                            echo "<div class='whitediv'></div>";
                        }
                        else{
                            echo "<div class='blackdiv'></div>";
                        }
                        //echo $c;
                        $c = $c+1;

                    }
                    $c=$c+1;
                    echo"<br>";
                }
                // echo "<div class='blackdiv'></div>";
                // echo "<div class='whitediv'></div>";
                // echo "<div class='blackdiv'></div>";
            ?>
    </div>
</body>
</html>