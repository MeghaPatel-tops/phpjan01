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
}


?>