<?php

class Model{
    public $connection;
    public function __construct(){
        $this->connection = new mysqli("localhost","root","","mvc");
        // if(isset($this->connection)){
        //     echo "db connect";
        // }
        // else{
        //     echo "db not connect";
        // }
    }

    public function insert_data($table,$data){
        //$data = ["name"=>"megha","subject"=>"php"];
        //$table= table name of db;
        //basic query = insert into tablename(name,subject)values('megha','php');
        $key = implode(',',array_keys($data));
        $value = implode("','",array_values($data));
        $query= "insert into $table ($key)values('$value')";
        $res = $this->connection->query($query);
        return $res;
        
    }
}



?>