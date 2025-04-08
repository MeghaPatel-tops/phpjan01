<head>
  <title>Ecommerce Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                                <a href="<?php echo $GLOBALS['baseUrl']?>/addtocart/${index.pid}" class="btn btn-primary">Add To Cart</a>
                            </div>
                    </div>
            </div>`;
            
            }
            
            document.getElementById("productbycatid").innerHTML =str;
        }
    </script>
  <script>
      $(document).ready(function(){
        getProduct(0);
      })

  </script>
  <style>
    body{
      overflow-x:hidden;
    }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    .productimage{
        height:150px;
        width: 150px;

    }
    .productcard{
        margin-bottom:20px;
        margin-top:20px;
    }
  </style>
  
</head>