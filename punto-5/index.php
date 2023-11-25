<?php
const TICKET_PRICE = 25000;
$membershipType = "";
$personNumber = 0;

echo "Digite el numero de personas a ingresar: \n";
$personNumber = readline();

echo "Digite el tipo de membresia: \n";
$membershipType = readline();

$totalPay = $personNumber * TICKET_PRICE;

if ($membershipType == "A")
{
  $totalPay = $totalPay *30;
}
else if ($membershipType == "B")
{
  $totalPay = $totalPay *0.7;
}

echo "El total a pagar es: $ $totalPay";
?>