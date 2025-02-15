<?php
include('../connection.php');
$query = "SELECT * FROM `student` join city on student.city = city.cityid";
$req= $connection->query($query);
while($row=$req->fetch_object()){
    $studentArray[]=$row;
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student Details</h2>
  <table class="table">
    <thead>
      <tr>
        <th>StudentName</th>
        <th>Email</th>
        <th>Hobby</th>
        <th>Gender</th>
        <th>City</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
            <?php
                foreach($studentArray as $key){
                    ?>
                        <tr>
                            <td><?php echo $key->studentname?></td>
                            <td><?php echo $key->email?></td>
                            <td><?php echo $key->hobby?></td>
                            <td><?php echo $key->gender?></td>
                            <td><?php echo $key->cityname?></td>
                            <td><?php echo $key->address?></td>
                            <td><a class="btn btn-danger" href="?sid=<?php echo $key->sid?>">DELETE</a></td>
                            <td><a class ="btn btn-success" href="edit.php?sid=<?php echo $key->sid?>">Edit</a></td>
                        </tr>
                    <?php
                }
            ?>
    </tbody>
  </table>
</div>

</body>
</html>
<?php
if(isset($_REQUEST['sid'])){
    $sid= $_REQUEST['sid'];
    $query="delete from student where sid=$sid";
    $res=$connection->query($query);
    if($res){
       header("Location:studentindex.php");
    }
}

?>
