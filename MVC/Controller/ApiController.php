<?php

class ApiController extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $catdata = $this->select_data("category");
        include('View/apiproduct.php');
    }

    public function create(){
       
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
            $res = ["status"=>200,"msg"=>"successfully inserted"];

            echo json_encode($res);
        }
        }
    }

    public function view(){
        $productdata  = $this->select_data("products");
        if(isset($productdata)){
            echo json_encode($productdata);
        }
    }
}



?>