<?php
class Test{
    public  $name,$id;
    function __call($method,$parameter){
        echo "<h1>Method name:".$method."</h1>";
        print_r($parameter);
    }

    function __toString(){
        return "<h1>__toString() called</h1>";
    }
}

$t1= new Test();
$t1->name="Megha";
$t1->id=123;
$t1->display(["name"=>"megha","subject"=>"php"]);

echo $t1;


?>