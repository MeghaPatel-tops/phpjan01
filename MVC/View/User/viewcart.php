<!DOCTYPE html>
<html lang="en">
<?php include('head.php')?>
<body>

<?php include('nav.php')?>
  
<div class="container-fluid text-center">    
  <div class="row content">
  <?php include('aside.php')?>

    <div class="col-sm-10 text-left"> 
      <h1>Cart Data</h1>
      <div class="container-fuild">
         
  <table class="table table-responsive">
    <thead>
      <tr>
        <th>Productname</th>
        <th>Image</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Subtotal</th>
        
      </tr>
    </thead>
    <tbody>
        <?php
        $total=0;
            foreach($cartdata as $index){
                $total=$total+($index->cqty*$index->price);
                ?>
                    <tr>
                        <td><?php echo $index->pname;?></td>
                        <td><img src="<?php echo $GLOBALS['baseUrl'].'/upload/'.$index->pimg?>" alt="" height="50px" width="50px"></td>
                        <td><?php echo $index->price;?></td>
                        <td><input type="number" name="" id="" value="<?php echo $index->cqty;?>"></td>
                        <td><?php echo ($index->cqty*$index->price);?></td>
                    </tr>
                <?php
            }
        ?>
        <tr>
            <th colspan="5">Total:<?php echo $total?></th>
        </tr>
    </tbody>
  </table>
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

