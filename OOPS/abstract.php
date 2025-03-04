<?php
    abstract  class Parent1{
        abstract  function printUser();

           function display(){
                echo "<h1>Abstract class example</h1>";
           }
    }

    class Child extends Parent1{
            function printUser(){
                echo "<h1>Abstract method define in child class</h1>";
            }
    }

    $c1 = new Child();
    $c1->display();
    $c1->printUser();

?>