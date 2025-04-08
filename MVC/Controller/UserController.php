<?php
class UserController extends Model{
    public function __contstruct(){
        parent::__construct();
    }

    public function userhome(){
        if(isset($_SESSION['user'])){
            $uid = $_SESSION['user']->userid;
            $cartdata = $this->findAllById("cart",["userid"=>$uid]);
            $count= count($cartdata);
        
        }
        else{
            $count=0;
        }
        $catData = $this->select_data("category");
        $products = $this->select_data("products");
        include('View/User/home.php');
    }

    public function Registration(){
        $username = $_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $contact = $_POST['contact'];
        $insertUser = [
            "username"=>$username,
            "email"=>$email,
            "password"=>$password,
            "contact"=>$contact
        ];
        $res=$this->insert_data("users",$insertUser);
        if(isset($res)){
           header("Location:".$GLOBALS['baseUrl']."/user");
        };

       
    }
    public function Login(){
        
        $email=$_POST['email'];
        $password=$_POST['password'];
       
        $selectUser = [
            "email"=>$email,
            "password"=>$password,
        ];
        $res=$this->findOne("users",$selectUser);
        if($res){
             $_SESSION['user']=$res;
             header("Location:".$GLOBALS['baseUrl']."/user");
        }

       
    }

    function addtocart($pid){
        $uid=$_SESSION['user']->userid;
        $cartItem = $this->findOne("cart",["pid"=>$pid,"userid"=>$uid]);
        
        $msg="";
        $result;
        if(isset($cartItem) && $cartItem != ""){
            $result=$this->updateData("cart",["cqty"=>$cartItem->cqty+1],['cartid'=>$cartItem->cartid]);
            $msg="Quantity updated";
        }
        else{
            $cartdata = ["pid"=>$pid,"userid"=>$uid];
            $result = $this->insert_data("cart",$cartdata);
            $msg="Product Successfully added in cart";
        }
        if(isset($result)){
            echo "<script>
                alert('".$msg."');
                window.location.href='".$GLOBALS['baseUrl']."/user';
                </script>";
        }
    }
    public function Logout(){
        session_destroy();
        header("Location:".$GLOBALS['baseUrl']."/user");

    }

    public function viewcart(){
        $catData = $this->select_data("category");
        if(isset($_SESSION['user'])){
            $uid = $_SESSION['user']->userid;
           
            $cartdata1 = $this->findAllById("cart",["userid"=>$uid]);
            $count= count($cartdata1);
            $join = ["products"=>"products.pid=cart.pid"];
            $cartdata = $this->join_table_data("cart",$join,["userid"=>$uid]);
            include('View/User/viewcart.php');
        }
    }
}


?>