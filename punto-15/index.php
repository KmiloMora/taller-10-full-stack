<?php
 include "./operationUtils.php";

//DATOS DE ENTRADA
$numberOne = 0;
$numberTwo = 0;
$option = "";

$numberOne = getNumber();
$numberTwo = getNumber();

$option = showMenu();

$result = operate($numberOne, $numberTwo, $option);

echo "El resultado de la operacion es: " . $result;
?>