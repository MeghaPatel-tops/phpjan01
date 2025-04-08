<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>
<body>

<?php include('nav.php')?>
  
<div class="container-fluid text-center">    
  <div class="row content">
  <?php include('aside.php')?>

    <div class="col-sm-10 text-left"> 
      <h1>Welcome</h1>
        <div class="row" id="productbycatid">
          
         
          
        </div>      
    </div>
    
  </div>
</div>
<script>
   $( document ).ready(function() {
    $(".productimage").mouseenter(function(){
      var id = this.id;
      $("#"+id).css("height","200px");
      $("#"+id).css("width","200px");
    });
  
    $(".productimage").mouseleave(function(){
      var id = this.id;
      $("#"+id).css("height","150px");
      $("#"+id).css("width","150px");
    });
      

});
  </script>
<?php include('footer.php')?>

