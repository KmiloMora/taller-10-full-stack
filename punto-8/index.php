<?php
//DATOS DE ENTRADA
$membershipType = "";
$personNumber = 0;
const TICKET_PRICE = 25000;

//PROCESO
echo "Digite el tipo de membrecia: ";
$membershipType = readline();

echo "Digite el numero de personas: ";
$personNumber = strtoupper(readline());

$totalPay = $personNumber * TICKET_PRICE;

switch($membershipType) {
  case "A":
    $totalPay = $totalPay * 0.7;
    break;
  case "B":
    $totalPay = $totalPay * 0.75;
    break;
  case "C":
    $totalPay = $totalPay * 0.9;
    break;
  case "D":
    $totalPay = $totalPay * 0.95;
    break;
  default:
    echo "Usted no cuenta con una membrecia para poderle aplicar un descuento \n";
}
    echo "El total a pagar es de: " . $totalPay;