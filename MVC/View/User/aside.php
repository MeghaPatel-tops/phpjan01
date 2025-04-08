<div class="col-sm-2 sidenav">
    <p style="text-align:left;padding-left:10px">
    <button  type="button" class="btn btn-link" onclick="getProduct(0)">All</button>
  </p>
    <?php
   
      foreach($catData as $key){
        ?>
        <p style="text-align:left;padding-left:10px">
          <button  type="button" class="btn btn-link" onclick="getProduct(<?php echo $key->cid;?>)"><?php echo $key->cname;?></button>
        </p>
        <?php
      }
    
    ?>
    </div>
  