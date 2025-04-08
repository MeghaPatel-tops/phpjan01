<?php
  class Auth{
      public function __construct(){
         if(isset($_SESSION['user'])){
            
         }
         else{
            echo "<script>
                alert('Please Login First');
                window.location.href='".$GLOBALS['baseUrl']."/user';
                </script>";
            //header("Location:".$GLOBALS['baseUrl']."/user");
         }
      }
  }

?>