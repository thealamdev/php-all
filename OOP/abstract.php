<?php

use calculation as GlobalCalculation;

abstract class calculation{
    public $n1 = 10;
    public $n2 = 20;
    function sum(){
        $this->sum = $this->n1 + $this->n2;
        return $this->sum;
    }

    abstract function sub();

    
}

class add extends calculation{
    function sub(){
        
    }
}
$object = new add();
echo $object->sum();




