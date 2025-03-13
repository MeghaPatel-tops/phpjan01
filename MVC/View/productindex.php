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
            <div class="col-md-12">
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Product</h3>
                <a href="productadd" class="btn btn-primary ms-5" >Add New</a>
                </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Index</th>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Decription</th>
                          <th>Quantity</th>
                          <th>Image</th>
                          
                      </thead>
                      <tbody>
                      <?php
                       $i=1;
                        foreach($productdata as $index){
                            ?>
                             <tr class="align-middle">
                            <td><?php echo $i?></td>
                          <td><?php echo $index->pname?></td>
                          <td><?php echo $index->price?></td>
                          <td><?php echo $index->description?></td>
                          <td><?php echo $index->qty?></td>
                          <td><img src="upload/<?php echo $index->pimg?>" alt="" width="80px" height="80px"></td>
                         
                            
                        </tr>

                            <?php
                            $i++;
                        }
                       
                       ?>
                       
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                   
                  </div>
                </div>
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
      <!--begin::Footer-->
     <?php include('footer.php')?>