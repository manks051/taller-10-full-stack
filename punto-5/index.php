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
if (strtoupper($memberShipType) == "A") {  
    $totalCash = $totalCash * 0.7;
     } else if (strtoupper($memberShipType) == "B") {
    $totalCash = $totalCash * 0.7;
   } else {
  echo "Sin descuento" . "\n";
   }
echo "Total a pagar: $" . number_format($totalCash);