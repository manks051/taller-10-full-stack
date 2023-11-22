<?php
//// DATOS DE ENTRADA CONSTANTE Y VARIABLE
const TICKET = 25000;
$personNumber = 0;
$memberShipType = "";
//// PROCESO
echo "Digite el numero de personas que entraran a la bolera: \n";
$personNumber = readline();

echo "Ingrese el tipo de afiliacion: \n";
$memberShipType = readline();

$totalCash = $personNumber * TICKET;
//// DATOS DE SALIDA
switch (strtoupper($memberShipType)) {
  case "A":
  $totalCash = $totalCash * 0.7;
  break;
  case "B":
  $totalCash = $totalCash * 0.75;
  break;
  case "C":
  $totalCash = $totalCash * 0.9;
  break;
  case "D":
  $totalCash = $totalCash * 0.95;
  break;
  default:
  echo "Afiliacion no valida \n";
}
echo "Total a pagar: $" . number_format($totalCash);
