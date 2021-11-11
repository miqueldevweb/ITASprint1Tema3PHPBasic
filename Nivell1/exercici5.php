<?php
$array1 = array(0,1,2,3,4);
$array2 = array(0,1,2);

array_push($array2, 7);
$result = array_merge($array1,$array2);
echo count($result) . "<br>";
print_r($result);
?>