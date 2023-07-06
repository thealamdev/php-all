<?php
date_default_timezone_set('Asia/Dhaka');
echo date('y-m-d');
echo "<pre>";
print_r($dates = (getdate()));
echo "</pre>";

echo $dates['mday'];