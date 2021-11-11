<?php
$x = array(10, 20, 30, 40, 50);
//Se puede eliminar un elemento de la cola con array_pop(), de esa manera los índices quedan corectos:
array_pop($x);
print_r($x);
echo "<br>";
//Volvemos a añadir el elemento eliminado:
array_push($x, 50);

//Imaginemos que el usuario quiere elegir el elemento que quiere eliminar, lo introduciria y tendriamos que buscarlo en el array, para el caso supondremos que el usuario elige el numero 40
$index = array_search(40, $x);

//Hemos encontrado el elemento, para que los índices queden normalizados vamos a cambiar el orden de los elementos y posteriormente usaremos array_pop():
$auxiliar = $x[count($x) - 1];
$x[count($x) - 1] = $x[$index];
$x[$index] = $auxiliar;
array_pop($x);
print_r($x);
?>