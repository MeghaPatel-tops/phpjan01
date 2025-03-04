<?php
interface Car{
        public function carDetails();
        public function carPrice();
}

class TestCar implements Car{
    public function carDetails(){
        echo "<h1>carDetails</h1>";
    }
    public function carPrice(){
        echo "<h1>carPrice</h1>";
    }
}

$t1 = new TestCar();
$t1->carDetails();
$t1->carPrice();


?>