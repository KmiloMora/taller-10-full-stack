<?php
//DATOS DE ENTRADA
$numberOne = 0;
$numberTwo = 0;
$option = "";
$result = 0;

//PROCESO
echo "Elija la opcion para realizar la operacion siendo \n";
echo "+ -> Suma \n";
echo "- -> Resta \n";
echo "* -> Multiplicar \n";
echo "/ -> Dividir \n";

$option = readline();

echo "Digite el primer numero: ";
  $numberOne = readline();

echo "Digite el segundo numero: ";
  $numberTwo = readline();

switch($option) {
  case "+" :
  $result = $numberOne  + $numberTwo;
    break;
  case "-" :
  $result = $numberOne  - $numberTwo;
    break;
  case "*" :
  $result = $numberOne  * $numberTwo;
    break;
  case "/" :
  $result = $numberOne  / $numberTwo;
    break;
  default:
    echo "La operacion ingresada no es valida";
}
   echo "El resultado de la  operacion es : " . $result;

?>