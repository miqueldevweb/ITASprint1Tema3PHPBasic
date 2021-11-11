<?php
$paraulaProva = "velocipastor";
$mida = strlen($paraulaProva) - 1;
$auxiliar ="";

$auxiliar = $paraulaProva[0];
$paraulaProva[0] = $paraulaProva[$mida];
$paraulaProva[$mida] = $auxiliar;
echo $paraulaProva;
?>