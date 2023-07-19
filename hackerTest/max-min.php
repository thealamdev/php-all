 <?php


    $array = [
        1,2,3,4,5
    ];

    $minValue = min($array);
    $minArray = [$minValue];

    $maxValue = max($array);
    $maxArray = [$maxValue];

    $newMax = array_diff($array, $minArray);
    $newMin = array_diff($array, $maxArray);

    $maxSum = array_sum($newMax);
    $minSum = array_sum($newMin);

     
    echo $minSum." ".$maxSum;
  