<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <?php include('head.php')?>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <?php include('nav.php')?>
      <!--end::Header-->
      <!--begin::Sidebar-->
     <?php include('aside.php');?>
      <!--end::Sidebar-->
      <!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <div class="row">
            <div class="col-md-6">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header">
                    <div class="card-title">Product Add</div>
                  </div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="post" enctype="multipart/form-data" id="productform">
                    <!--begin::Body-->
                    <div class="card-body">
                      
                      <div class="mb-2 col-md-6">
                        <label for="exampleInputEmail1" class="form-label"
                          >Product Name</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="pname"
                          aria-describedby="emailHelp"
                          name="pname"
                        />
                        <div class="col-md-6">
                          <label for="" class="form-label">State</label>
                          <select class="form-select" id="catid" required name="catid"   >
                            <option selected disabled value="">Choose...</option>
                            <?php
                            foreach($catdata as $index){
                                ?>
                                    <option value="<?php echo $index->cid?>"><?php echo $index->cname?></option>
                                <?php
                            }
                            
                            ?>
                          </select>
                         
                        
                        </div>
                      </div>
                      <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"
                          >Price</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="price"
                          aria-describedby="emailHelp"
                          name="price"
                        />
                       
                      </div>
                      <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"
                          >Quantity</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="qty"
                          aria-describedby="emailHelp"
                          name="qty"
                        />
                       
                      </div>
                      <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"
                          >Description</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="desc"
                          aria-describedby="emailHelp"
                          name="desc"
                        />
                       
                      </div>
                      </div>
                      <div class="input-group mb-2">
                        <input
                          type="file"
                          class="form-control"
                          id="pimage"
                          name="pimage"
                        />
                        <label class="input-group-text" for="inputGroupFile02"
                          >Upload</label
                        >
                      </div>
                      <div class="input-group mb-1">
                      <input type="submit" class="btn btn-primary"
                        value="Submit" name="submit" id="btnsubmit">
                        </div>
                    </div>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Index</th>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Decription</th>
                          <th>Quantity</th>
                          <th>Image</th>
                          <th colspan="2">Action</th>
                          
                      </thead>
                      <tbody id="pdata">
                     
                      
                       
                      </tbody>
                    </table>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                     
                      
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                
              </div>
            </div>
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
      <script>
        function getProduct(){
            $.ajax({
              url:"<?php echo $GLOBALS['baseUrl']?>/apiproductget",
              method:"GET",
              success:function(data){
                console.log(data)
                createTable(data)
              }
            });
        }
        function createTable(data){
          var data = JSON.parse(data);
          str="";
          var i=1;
           for(index of data){
            console.log(index)
              str+=`
               <tr class="align-middle">
                            <td>${i}</td>
                          <td>${index.price}</td>
                          <td>${index.description}</td>
                          <td>${index.qty}</td>
                          <td><img src="upload/${index.pimg}" alt="" width="80px" height="80px"></td>
                          <td><a href="deleteproduct/${index.pid}" class="btn btn-danger">DELETE</a></td>
                          <td>
                            <a href="editproduct/${index.pid}" class="btn btn-success">EDIT</a>
                          </td>
                         
                            
                        </tr>
              `;
            
           i++;
        }
         $("#pdata").html(str);
          console.log(str)
      }      
        $(document).ready(function(){
          getProduct();
            $("#productform").on("submit",function(e){
              e.preventDefault();
              
                var form = document.getElementById('productform');
                let formData = new FormData(form)
                //alert(formData);
                var file_data = $("#pimage").prop("files")[0];
                console.log(file_data);
                formData.append('pimage',file_data )
                alert(formData.get('file'));
              
                $.ajax({
                    type:"POST",
                    url:"<?php echo $GLOBALS['baseUrl']?>/apiproductadd",
                    data:formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success:function(data){
                        alert(data);
                        getProduct();





                        \\\
                    }
                })
                
            })

        })

    //     var form = document.getElementById('productform');
    // form.addEventListener('submit', function(event) {
    //     event.preventDefault(); // Prevent form submission to see the log
    //     let formData = new FormData(form);
    //     console.log(formData.get('pname')); // Correct way to get the value
    // });
      </script>
     <?php include('footer.php')?>