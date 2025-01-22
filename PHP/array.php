<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Example</title>
</head>
<body>
    <?php
    $fruit = ["Apple","KIWI","banana","graps"];
    $user=["username"=>"Megha","email"=>"m@gmail.com","contactno"=>"90090098898"];
    $technology=[
        "Front-End"=>["React","Nextjs","Angular"],
        "Back-End"=>[
            "Java"=>["coreJava","Advancejava"],
            "PHP"=>["core","framework"],
            "Python",
            ".net"]
    ]

    ?>
    <h1>
        Index Array Example<br>
        <?php
         echo "<pre>";

         print_r($fruit);
        ?>
    </h1>
    <h1>
        Associative Array Example<br>
        <?php
         echo "<pre>";

         print_r($user);
        ?>
    </h1>
    
    <h1>
    Multidimensional Array Example<br>
        <?php
         echo "<pre>";

         print_r($technology);
        echo "<br>";
        echo $technology['Back-End']['Java'][1];//Destructing of array
        ?>
    </h1>
</body>
</html>