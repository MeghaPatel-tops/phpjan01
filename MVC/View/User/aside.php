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
    <script>
       async function getProduct(catid){
            const data = await fetch(`<?php echo $GLOBALS['baseUrl']?>/getProduct/${catid}`);
            var result = await data.text();
            result = JSON.parse(result);
            var str="";
            var url = "<?php echo $GLOBALS['baseUrl'].'/upload/'?>"
            for(index of result){
               
                str+=` <div class="col-md-4">
                        <div class="card productcard" style="width: 18rem;">
                            <img src="${url}${index.pimg}" class="card-img-top productimage" alt="" >
                            <div class="card-body">
                                <h5 class="card-title"><b>${index.pname}</b></h5>
                                <p class="card-text">Price:${index.price}</p>
                                <p class="card-text">${index.description}</p>
                                <a href="#" class="btn btn-primary">Add To Cart</a>
                            </div>
                    </div>
            </div>`;
            
            }
            
            document.getElementById("productbycatid").innerHTML =str;
        }
    </script>