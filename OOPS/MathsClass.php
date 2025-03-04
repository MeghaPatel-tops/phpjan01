<?php
class MathsClass{
     public
     const PI=3.14;

     function getArea(){
        $area = MathsClass::PI*2*2;
        echo $area;
     }
}

$m1= new MathsClass();
$m1->getArea();


?>