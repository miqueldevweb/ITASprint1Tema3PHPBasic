<?php
$input = "Hello world";
$result= array();

$inputSize = strlen($input);

for($i = 0; $i < $inputSize; $i++){
        if($input[$i] != " "){
        $result[$i] = $input[$i];
    }
}

print_r($result);
?>