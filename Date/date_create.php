<?php

$date = date_create('2023-03-15', timezone_open('Asia/Dhaka'));

// print_r($date);

echo date_format($date,'y-m-d');