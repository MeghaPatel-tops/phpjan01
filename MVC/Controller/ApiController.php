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

    public function apiproductdelete($pid){
        $result = $this->delete_data("products",['pid'=>$pid]);
    }

    public function apiproductedit($pid){
        $reslut = $this->findOne("products",["pid"=>$pid]);
        if(isset($reslut)){
            echo json_encode($reslut);
        }
    }

    public function apiproductupdate(){
        $imgname="";
        if(isset($_FILES['pimage']['name']) && $_FILES['pimage']['name'] != ""){
            $temp = $_FILES['pimage']['tmp_name'];
            $imgname=$_FILES['pimage']['name'];
            move_uploaded_file($temp,"upload/".$imgname);
        }else{
            $imgname=$_REQUEST['pimagehidden'];
        }
            $productdata=[
            "pname"=>$_REQUEST['pname'],
            "price"=>$_REQUEST['price'],
            "description"=>$_REQUEST['desc'],
            "qty"=>$_REQUEST['qty'],
            "catid"=>$_REQUEST['catid'],
            "pimg"=>$imgname
        ];
        $response=$this->updateData("products",$productdata,["pid"=>$_POST['pid']]);
        if(isset($response)){
            $res = ["status"=>200,"msg"=>"successfully update"];

            echo json_encode($res);
        }
        
    }
}



?>