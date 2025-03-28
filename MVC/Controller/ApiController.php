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
        $productdata=[
            "pname"=>$_REQUEST['pname'],
            "price"=>$_REQUEST['price'],
            "description"=>$_REQUEST['desc'],
            "qty"=>$_REQUEST['qty'],
            "catid"=>$_REQUEST['catid'],
        ];
        $response=$this->insert_data("products",$productdata);
        if(isset($response)){
            $res = ["status"=>200,"msg"=>"successfully inserted"];

            echo json_encode($res);
        }
    }
}



?>