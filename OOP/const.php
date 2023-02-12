<?php

class calculation{
    public const TK = 5000;
    public $taka = 500;
    function countall(){
        echo "Total taka is TK " . self::TK . "\n";
        echo "taka is {$this->taka} "; 
    }
   
}

// class dog extends calculation{
//     function countall(){
//         echo "Total taka is TK " . self::TK . "\n";
//         echo "taka is {$this->taka} "; 
//     }
// }

$object = new calculation();
$object->countall();
echo calculation::TK;

echo calculation::TK;
