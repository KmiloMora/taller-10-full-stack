<?php
//DATOS DE ENTRADA
$numberArray = array(5, 1, 8, 9, 2);
$sum = 0;

//PROCESO
foreach($numberArray as $num) {
  $sum = $sum + $num;
}

echo "La suma total es: " . $sum;
?>