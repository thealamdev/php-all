<?php
// here we will create a program to find the sum of two numbers:
class calculate{
    public $a;
    public $b;
    public $sum;

    function add(){
        $this->sum = $this->a + $this->b;
        return $this->sum;
    }



}

// creating a  object of calculate class:
$object1 = new calculate();
$object1->a =  30;
$object1->b = 40;
echo $object1->add();




