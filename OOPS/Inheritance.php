<?php
    class Category{
        public $cid,$categoryName;

        function getCategoryData(){
            $this->cid=1;
            $this->categoryName="eletronic";
        }
    }

    class Product extends Category{
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
                echo "<br>".$this->cid;
                echo "<br>".$this->categoryName;
            }
    
    }
    $p1 = new Product();
    $p1->getCategoryData();
$p1->getProduct();
$p1->showProduct();

?>