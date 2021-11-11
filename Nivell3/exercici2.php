<?php
$input = "Aquest es l'array de prova, es contaran quants caracters d'un tipus hi han";
$inputSize = strlen($input);
$search = "a";   //-> En aquest cas contarem les lletres 'a'
$count = 0;

for($i = 0; $i < $inputSize; $i++){
    if($input[$i] == $search){
        $count++;
    }
}

echo "La cadena te " . $count . " caracters '" . $search . "'.<br>";

//Si volem que agafi minuscules i majuscules en el cas de que l'input sigui una lletra, modificant la sentencia if del bucle:
//
//if(($input[$i] == $search) || (ord($input[$i] == ord($search) - 32))  --> si el numero introduit es una minuscula
//if(($input[$i] == $search) || (ord($input[$i] == ord($search) + 32))  --> si el numero introduit es una majuscula
//Es majuscula si:
//  if(ord($search) < 91)       --> Per tant:
//

$count = 0;
for($i = 0; $i < $inputSize; $i++){
    if(ord($search) < 91){
        if(($input[$i] == $search) || (ord($input[$i]) == ord($search) + 32)){
            $count++;
        }
    }else{
        if(($input[$i] == $search) || (ord($input[$i]) == ord($search) - 32)){
            $count++;
        }
    }
}
echo "La cadena te " . $count . " caracters '" . $search . "'. Tenint en compte majuscules i minuscules.<br>";
?>