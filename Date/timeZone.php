<?php

echo date_default_timezone_get() . "<br>";
echo date_default_timezone_set('Asia/Dhaka') . "<br>";
echo date_default_timezone_get() . "<br>";
$tz = timezone_open('Asia/Dhaka');
echo timezone_name_get($tz) . "<br>";

echo "<pre>"; 
    print_r($time = timezone_location_get($tz));
    $timezones = (timezone_identifiers_list(16));
     
echo"</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeZone</title>
</head>
<body>
    <select name="" id="">
        <?php foreach($timezones as $key => $t){?>
            <option value="<?=$t?>"><?php echo $t ?></option>
        <?php } ?>
         
    </select>
</body>
</html>