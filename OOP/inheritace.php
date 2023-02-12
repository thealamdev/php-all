<?php

class animals{
    private $name = "Shah Alam";
    public $age;
    function myname(){
        echo "My name is {$this->name}";
    }
}

class dog extends animals{
    public $girlfriend;
}

class cat extends animals{

}

//  object create of dog and cat class:

$dogObject = new dog();
$catObject = new cat();
$animalObject = new animals();


echo $dogObject->name = "Dog's name is Tom \n";
echo $dogObject->age = 10 ."\n";
echo $dogObject->girlfriend = "His girlfriend name is Pussy \n";

echo $catObject->name = "Cat's name is Jerry \n";
echo $catObject->age = 5 ."\n";


$animalObject->myname();
echo $catObject->name = "newe";
 

