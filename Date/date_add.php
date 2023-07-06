<?php

$date = date_create('2023-05-15');

date_add($date,date_interval_create_from_date_string("30 days"));

echo "<pre>";
// print_r( date_interval_create_from_date_string('30 days'));
print_r(date_add($date,date_interval_create_from_date_string("30 days")));
 
echo "</pre>";

