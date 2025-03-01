<?php
class Product{
    private $pid,$pname,$price,$description;//data member

    public function getProduct(){
            $this->pid=1;
            $this->pname="test product";
            $this->price = 12000;
            $this->description="test product discription";
        }
    public  function showProduct(){
            echo $this->pid;
            echo "<br>".$this->pname;
            echo "<br>".$this->price;
            echo "<br>".$this->description;
        }

}

$p1 = new Product();
$p1->getProduct();
$p1->showProduct();
echo "<h1>".$p1->pname."</h1>";


?>