<?php

// sum two numbers by using oop:
class calculation{
    public $num1;
    public $num2;
    public $sum;

    function sum(){
        $this->sum = $this->num1 + $this->num2;
        return $this->sum;
    }
}

// object of calculation class:
$object_cal = new calculation();
$object_cal->num1 = 20;
$object_cal->num2 = 30;
echo "The sum is :" . $object_cal->sum();