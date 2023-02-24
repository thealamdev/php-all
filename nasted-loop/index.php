<?php

for($i=1; $i<100; $i=$i+10){
    for($j=$i; $j<$i+10; $j++){
        echo $j ." ";
    }
    echo "<br>";
}


for($i=1;$i<10;$i++){
    echo $i;
    if($i == 5){
        goto abc;
    }
    
}
abc:
echo "hi";