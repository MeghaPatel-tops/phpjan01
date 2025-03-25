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

    public function select_data($table){
        $query = "select * from $table";
        $req= $this->connection->query($query);
        while($row=$req->fetch_object()){
            $rw[]=$row;
        }
        return $rw ?? [];
    }

    public function delete_data($table,$where){
        //$where = ["id"=>1];
        //$table= table name of db;
        //basic query = delete from table where id=1;
        $query ="delete from $table where 1=1";
        foreach($where as $key=>$value){
            $query.= " And ".$key . "= '".$value."'";
        }
        $res = $this->connection->query($query);
        return $res;
    }

    public function findOne($table,$where){
        //$where = ["id"=>1];
        //$table= table name of db;
        //basic query = select *  from table where id=1;
        $query ="select  * from $table where 1=1";
        foreach($where as $key=>$value){
            $query.= " And ".$key . "= '".$value."'";
        }
        $res = $this->connection->query($query);
        $rw = $res->fetch_object();


        return $rw ?? "";
    }

    public function findAllById($table,$where){
        //$where = ["id"=>1];
        //$table= table name of db;
        //basic query = select *  from table where id=1;
        $query ="select  * from $table where 1=1";
        foreach($where as $key=>$value){
            $query.= " And ".$key . "= '".$value."'";
        }
        $req = $this->connection->query($query);
        while($row=$req->fetch_object()){
            $rw[]=$row;
        }
        return $rw ?? [];
    }

    public function updateData($table,$setSrray,$where){
        //update table set key ='value',key='value ' where id=1;
        $query= "update $table set ";
        $count = count($setSrray);
        $i=0;
        foreach($setSrray as $key =>$value){
            $i++;
            if($i > $count-1){
                $query.=" ". $key ." = '".$value ." ' ";
            }
            else{
                $query.=" ". $key ." = '".$value ." ',";
            }
            
        }
        $query.=" where 1=1";
        foreach($where as $key=>$value){
            $query.= " And ".$key . "= '".$value."'";
        }
        echo $query;

        $res = $this->connection->query($query);
        return $res;
    }
}



?>