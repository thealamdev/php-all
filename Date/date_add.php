<?php

$date = date_create('2023-05-15');

$new = date_sub($date,date_interval_create_from_date_string("5  months"));
$newDate = date_modify($date,"10 days");

echo "<pre>";
print_r( date_interval_create_from_date_string('5 months'));
print_r(date_add($date,date_interval_create_from_date_string("30 days")));
 
echo "</pre>";

// echo date_format($date)
echo date_format($newDate, 'd-m-y');

