<?php

$arr = [
    "item"=>[
        'milk',
        'orange',
        'onion',
    ],
    "idea"=>[
        'object',
        'oop',
        'nothing'
    ],
];

// foreach($arr as $s){
//     foreach($s as $single){
//         echo $single. "\n";
//     }
// }

$object = json_encode($arr);
var_dump($object);

$array = json_decode($object,true);
var_dump($array);

$s_arr = json_decode($object,true);
var_dump($s_arr);

foreach($array as $value){
    foreach($value as $item){
        echo $item;
    }
}


class Name{
    public function product(){
         $product = "shah";
    }
}


$name = new Name();
$name->



 
 