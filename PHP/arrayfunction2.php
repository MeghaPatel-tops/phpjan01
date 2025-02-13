<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<pre>";
    $fruit = ["Apple","kiwi","banana","mango"];

    $Subject=["subjectcode"=>"00k1","title"=>"test titel","duration"=>"8month"];

    ?>
    <h1>PUSH & POP</h1>
    <p>
        <b>Push:Add en element at end of the array</b>
        <br>
        <b>POP:REmove en element at end of the array </b>
    </p>
    <?php
            print_r($fruit);
            echo "<h6>Add orange fruit to the end</h6>";
            array_push($fruit,"orange");
            print_r($fruit);
            echo "<h6>Remove  fruit from the end</h6>";
            array_pop($fruit);
            print_r($fruit);
            echo "<h3>count : count array element</h3>";
            echo count($fruit);
    ?>
    <h1>Sort array function for index array</h1>
    <p>
    <b>sort:</b>ASC order index array
        <br>
    <b>rsort</b>DESC order index array
    </p>
    <h1>
        <?php
            sort($fruit);
            print_r($fruit);
            echo "<br>";
            rsort($fruit);
            print_r($fruit);
        ?>
    </h1>
    <h1>Ksort  array function for Associative array(Sort key of array)</h1>
    <p>
    <b>ksort:</b>ASC order Associative array
        <br>
    <b>krsort</b>DESC order Associative array
    </p>
    <h1>
        <?php
            ksort($Subject);
            print_r($Subject);
            echo "<br>";
            krsort($Subject);
            print_r($Subject);
        ?>
    </h1>
    <h1>Ksort  array function for Associative array(Sort value of array)</h1>
    <p>
    <b>asort:</b>ASC order Associative array
        <br>
    <b>arsort</b>DESC order Associative array
    </p>
    <h1>
        <?php
            asort($Subject);
            print_r($Subject);
            echo "<br>";
            arsort($Subject);
            print_r($Subject);
        ?>
    </h1>
</body>
</html>