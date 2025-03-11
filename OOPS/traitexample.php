<?php
    trait CommanFunction{
        function area($r){
            $a= $r*$r*3.14;
            echo "<h1>area of circle=".$a."</h1>";
        }

    }

    trait Maths{
        function Calc($a,$b){
            $c=$a+$b;
            echo "<h1>addition=".$c."</h1>";
        }
    }

    class Child{
        use CommanFunction;
        use Maths;
    }

    $c1 = new Child();
    $c1->area(2);
    $c1->Calc(12,56);


?>