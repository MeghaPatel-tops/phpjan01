<?php
class Staticclass{
    public static $objCout;

    public function __construct(){
           Staticclass::$objCout++;
    }
    public static function printCount(){
        echo "<h1>Total object=".Staticclass::$objCout."</h1>";
    }

}
Staticclass::$objCout=0;
$obj1= new Staticclass();
$obj2= new Staticclass();
$obj3= new Staticclass();

Staticclass::printCount();



?>