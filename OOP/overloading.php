<?php

class main{
    function first(){
        echo "This is SHAH \n";
    }
}

class sub extends main{
    function first(){
        parent::first();
        echo "This is ALAM";
    }
}

$object = new sub();
$object->first();
