<?php
include('../connection.php');
//get student details from database using id
  if(isset($_REQUEST['sid'])){
    $sid=$_REQUEST['sid'];
    $query = "select * from student where sid=$sid";
    $req=$connection->query($query);
    $studentData = $req->fetch_object();
   
  }

  //Get city data from database
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
      <input type="text" class="form-control" placeholder="Enter Product Name" name="studentname" value="<?php echo $studentData->studentname?>">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" placeholder="Enter Product Name" name="email" value="<?php echo $studentData->email?>">
      </div>
      <div class="form-group">
        <label for="email">Hobby:</label>
        <input type="checkbox" class="form-check-input"  name="hobby[]" value="Sport" 
        <?php
          $hobbyArray = explode("-",$studentData->hobby);
          echo (in_array("Sport",$hobbyArray))?"Checked":"";
        ?>>Sport
        <input type="checkbox" name="hobby[]" value="Music" <?php
         
          echo (in_array("Music",$hobbyArray))?"Checked":"";
        ?>>Music
        <input type="checkbox"   name="hobby[]" value="Drawing" <?php
         
         echo (in_array("Drawing",$hobbyArray))?"Checked":"";
       ?>>Drawing
      </div>
      <div class="form-group">
        <label for="email">Gender:</label>
        <input type="radio"  name="gender" value="Male" 
        <?php
         
         echo ($studentData->gender=="Male")?"Checked":"";
       ?>
        >Male
        <input type="radio"   name="gender" value="Female" <?php
         
         echo ($studentData->gender=="Female")?"Checked":"";
       ?>>Female
      </div>
      <div class="form-group">
        <label for="email">City:</label>
        <select name="city" id="" class="form-control">
            <option value="">---City---</option>
            <?php
                foreach($cityArray as $city){
                    ?>
                        <option
                        <?php
                        echo ($city->cityid==$studentData->city)?"selected":"";
                        ?>
                         value="<?php echo $city->cityid?>"><?php echo $city->cityname?></option>
                    <?php
                }
            
            ?>
        </select>
      </div>
      <div class="form-group">
        <label for="email">Address:</label>
        <textarea name="address" id="" class="form-control"><?php echo trim($studentData->address);?>
        </textarea>
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

  echo $updateQuery = "update student set studentname ='$studentname',email='$email',hobby='$hobby',gender='$gender',city='$city',address='$address' where sid=$sid";
  $result = $connection->query($updateQuery);
  if($result){
    header("Location:studentindex.php");
  }
}

?>