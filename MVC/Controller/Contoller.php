<?php

class Controller extends Model{
        public function __contstruct(){
            parent::__construct();
        }


        public function index(){
            include('View/index.php');
        }
        public function about(){
            include('View/About.php');
        }
        public function home(){
            include('View/Home.php');
        }
        public function catadd(){
            include('View/categoryadd.php');
            if(isset($_REQUEST['submit'])){
                $cname= $_REQUEST['cname'];
                if(isset($_FILES['cimage']['name'])){
                    $temp = $_FILES['cimage']['tmp_name'];
                    $imgname=$_FILES['cimage']['name'];
                    move_uploaded_file($temp,"upload/".$imgname);
                    $insertData = ['cname'=>$cname,'cimage'=>$imgname];
                    $res=$this->insert_data("category",$insertData);
                    if(isset($res)){
                        header("Location:http://localhost/jaN01PHP/MVC/viewcategory ");
                        echo "<p class 'alert alert-success'>Data successfullly inserted</p>";
                    }
                }
                
            }
        }

        public function viewcategory(){
            $catdata = $this->select_data("category");
            include('View/viewcategory.php');
        }
        public function productindex(){
            $productdata = $this->select_data("products");
            include('View/productindex.php');
        }
        public function productcreate(){
            $catdata = $this->select_data("category");
            include('View/productcreate.php');
            if(isset($_REQUEST['submit'])){
                if(isset($_FILES['pimage']['name'])){
                    $temp = $_FILES['pimage']['tmp_name'];
                    $imgname=$_FILES['pimage']['name'];
                    move_uploaded_file($temp,"upload/".$imgname);
                $productdata=[
                    "pname"=>$_REQUEST['pname'],
                    "price"=>$_REQUEST['price'],
                    "description"=>$_REQUEST['desc'],
                    "qty"=>$_REQUEST['qty'],
                    "catid"=>$_REQUEST['catid'],
                    "pimg"=>$imgname
                ];
                $response=$this->insert_data("products",$productdata);
                if(isset($response)){
                    header("Location:http://localhost/jaN01PHP/MVC/product ");
                    echo "<p class 'alert alert-success'>Data successfullly inserted</p>";
                }
                }
            }
        }
}


?>