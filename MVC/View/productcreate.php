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
                  <form method="post" enctype="multipart/form-data">
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"
                          >Product Name</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="cname"
                          aria-describedby="emailHelp"
                          name="pname"
                        />
                        <div class="mb-2">
                        <div class="col-md-6">
                          <label for="" class="form-label">State</label>
                          <select class="form-select" id="" required name="catid"   >
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
                      </div>
                      <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label"
                          >Price</label
                        >
                        <input
                          type="text"
                          class="form-control"
                          id="cname"
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
                          id="cname"
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
                          id="cname"
                          aria-describedby="emailHelp"
                          name="desc"
                        />
                       
                      </div>
                      </div>
                      <div class="input-group mb-2">
                        <input
                          type="file"
                          class="form-control"
                          id="cimage"
                          name="pimage"
                        />
                        <label class="input-group-text" for="inputGroupFile02"
                          >Upload</label
                        >
                      </div>
                      <div class="input-group mb-1">
                      <input type="submit" class="btn btn-primary"
                        value="Submit" name="submit">
                        </div>
                    </div>
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
     <?php include('footer.php')?>