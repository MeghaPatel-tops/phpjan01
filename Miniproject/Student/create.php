<?php
include('../connection.php');
$quer1= "select * from city";
$req= $connection->query($quer1);
while($row=$req->fetch_object()){
    $cityArray[]=$row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="width: 60%;">
  <h2>Product Details Add</h2>
  <form method="post">
    <div class="form-group">
      <label for="email">Student Name:</label>
      <input type="text" class="form-control" placeholder="Enter Product Name" name="studentname">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" placeholder="Enter Product Name" name="email">
      </div>
      <div class="form-group">
        <label for="email">Hobby:</label>
        <input type="checkbox" class="form-check-input"  name="hobby[]" value="Sport">Sport
        <input type="checkbox" name="hobby[]" value="Music">Music
        <input type="checkbox"   name="hobby[]" value="Drawing">Drawing
      </div>
      <div class="form-group">
        <label for="email">Gender:</label>
        <input type="radio"  name="gender" value="Male">Male
        <input type="radio"   name="gender" value="Female">Female
      </div>
      <div class="form-group">
        <label for="email">City:</label>
        <select name="city" id="" class="form-control">
            <option value="">---City---</option>
            <?php
                foreach($cityArray as $city){
                    ?>
                        <option value="<?php echo $city->cityid?>"><?php echo $city->cityname?></option>
                    <?php
                }
            
            ?>
        </select>
      </div>
      <div class="form-group">
        <label for="email">Address:</label>
        <textarea name="address" id="" class="form-control"></textarea>
      </div>
  
    <input type="submit" class="btn btn-default" name="submit">
  </form>
</div>

</body>
</html>
<?php
    if(isset($_REQUEST['submit'])){
        $studentname=$_REQUEST['studentname'];
        $email = $_REQUEST['email'];
        $hobby = implode("-",$_REQUEST['hobby']);
        $gender = $_REQUEST['gender'];
        $city =$_REQUEST['city'];
        $address=$_REQUEST['address'];
        //insert into table(key)value(value);
        $query = "insert into student(studentname,email,hobby,gender,city,address)values('$studentname','$email','$hobby','$gender','$city','$address')";
        $result = $connection->query($query);
        if($result){
            echo "<p class='alert alert-success'>Data successfully inserted</p>";
        }
        else{
            echo "<p class='alert alert-danger'>Something Wrong!!!!!</p>";
        }

        
        
    }

?>