<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li{
            padding: 20px;
            border:1px solid black;
            display: block;
            list-style: none;
        }
    </style>
</head>
<body>
<?php
    $fruit = ["Apple","KIWI","banana","graps"];
    $user=["username"=>"Megha","email"=>"m@gmail.com","contactno"=>"90090098898"];
    ?>
    <h1>iNDEX ARRAY</h1>
    <ul>
        <?php
          foreach($fruit as $key){
                echo "<li>".$key."</li>";
          }
        ?>
    </ul>
    <h1>User Info</h1>
    <table border=1 cellspacing = 10px cellpadding=10px width="50%">
    <?php
         foreach($user as $key => $value){
            ?>
                <tr>
                    <th><?php echo $key?></th>
                    <td><?php echo $value?></td>
                </tr>
            <?php
         }
        ?>
    </table>
    
</body>
</html>