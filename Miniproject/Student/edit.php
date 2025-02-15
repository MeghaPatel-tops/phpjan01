<?php
include('../connection.php');
  if(isset($_REQUEST['sid'])){
    $sid=$_REQUEST['sid'];
    $query = "select * from student where sid=$sid";
    $req=$connection->query($query);
    $studentData = $req->fetch_object();
    echo "<pre>";
    print_r($studentData);
    exit;
  }

?>