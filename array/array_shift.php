<?php

$arry = [
    "apple",
    'oil',
    'bannana'
];

array_shift($arry);
array_unshift($arry, "orange");

echo "<pre>";
print_r($arry);
echo"</pre>";