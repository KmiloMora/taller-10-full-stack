<?php
//DATOS DE ENTRADA
$name = "";
$age = 0;

//PROCESO
echo "Digite su nombre: ";
$name = readline();

echo "Digite su edad: ";
$age = readline();

if ($age >= 18) {
  echo "Tu " . $name . " eres mayor de edad";
} else {
  echo  "Tu " . $name . " eres menor de edad";
}
?>