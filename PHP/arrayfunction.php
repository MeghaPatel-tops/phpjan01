<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            
            font-size:2em;
            text-decoration:underline;
        }
        p::before{
            content:"#";
        }
    </style>
</head>
<body>
    <?php
            $subject=["java",".net","php","spring"];
            $framework=["spring","Mvc.net","laravel","abc"];

            $user=["username"=>"Megha","email"=>"m@gmail.com","contactn"=>"90090098898"];
            $user1=["username1"=>"Megha","email"=>"m@gmail.com","contactno"=>"90090098898"];
    ?>
    <p><b>array_combine</b> --Creates an array by using one array for keys and
    another for its values</p>
    <h1>
       <?php
        print_r(array_combine($subject,$framework));
       ?>
    </h1>
    <p><b>Array_merge</b> -Merge one or more arrays</p>
    <h1>
    <?php
        print_r(array_merge($subject,$framework));
       ?>
    </h1>
    <p>Array_merge_recursive -Merge two or more arrays recursively
    </p>
    <h1>
    <?php
        print_r(array_merge_recursive($subject,$framework));
       ?>
    </h1>
    <p>Array_search -Searches the array for a given value and returns the
    corresponding key if successful</p>
    <h1>
        <?php
        echo "<pre>";
        print_r($user);
        echo 'array_search("Megha",$user)<br>';
        echo array_search("Megha",$user);
        ?>
    </h1>
    <p>
    Array_diff -Computes the difference of array
    </p>
    <h1>
        <?php
        echo "<pre>";
        print_r($subject);
        print_r($framework);
        print_r(array_diff($subject,$framework));
        print_r(array_diff_assoc($user,$user1));
        print_r(array_diff_key($user,$user1));
        ?>
    </h1>
    <p><b>Array_intersect</b> -Returns an array containing all the values of array1
    that are present in all the arguments.</p>
    <h1>
        <?php
            print_r(array_intersect($subject,$framework));
        ?>
    </h1>
    <p><b>in_array</b></p>
    <h2>
        <?php
            if(in_array("php",$subject)){
                echo true;
            }
            else{
                echo false;
            }
        ?>
    </h2>
    <p><b>Array_keys & Array_values</b></p>
    <h2>
        <?php
           print_r(array_keys($user));
           echo "<br>";
           print_r(array_values($user));
        ?>
    </h2>
    <p><b>implode:</b>Array To String Conversion<br>
    <b>explode:</b>String to array conversion
         </p>
    <h1>
        <?php
         echo $str= implode("-",$subject);
         echo "<br>";
         print_r(explode("-",$str));
        ?>
    </h1>
</body>
</html>