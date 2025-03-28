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
            <?php
                foreach($products as $key){
                    ?>
                      <div class="col-md-4">
                        <div class="card productcard" style="width: 18rem;">
                            <img id="img_<?php echo $key->pid?>" src="<?php echo $GLOBALS['baseUrl'].'/upload/'.$key->pimg?>" class="card-img-top productimage" alt="" >
                            <div class="card-body">
                                <h5 class="card-title"><b><?php echo $key->pname;?></b></h5>
                                <p class="card-text">Price:<?php echo $key->price;?></p>
                                <p class="card-text"><?php echo $key->description;?></p>
                                <a href="#" class="btn btn-primary">Add To Cart</a>
                            </div>
                    </div>
            </div>
                    <?php
                }
            ?>
         
          
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

