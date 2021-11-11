<?php
function sumaCondicional($number1, $number2){
    $result;
    if($number1 == $number2){
        $result = 2*($number1 + $number2);
    }else{
        $result = $number1 + $number2;
    }
    return $result;
}

echo "Proves de suma<br>";
echo "Números iguals (2,2): " . sumaCondicional(2,2) . "<br>";
echo "Números diferents (6,8): " . sumaCondicional(6,8) . "<br>";
?>