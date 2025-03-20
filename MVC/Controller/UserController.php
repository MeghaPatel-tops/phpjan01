<?php
class UserController extends Model{
    public function __contstruct(){
        parent::__construct();
    }

    public function userhome(){
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
    public function Logout(){
        session_destroy();
        header("Location:".$GLOBALS['baseUrl']."/user");

    }
}


?>