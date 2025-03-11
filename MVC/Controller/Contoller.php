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
                        echo "<p class 'alert alert-success'>Data successfullly inserted</p>";
                    }
                }
                
            }
        }
}


?>