<?php
function requestNumber() {
  echo "Digite el numero a operar \n";
  return readline();
}

function operationMenu() {
  echo "Ingrese la operacion que desea: \n";
  echo "1 - SUMAR \n";
  echo "2 - RESTAR \n";
  echo "3 - MULTIPLICAR \n";
  echo "4 - DIVIDIR \n";
  return readline();
}

function operations($x, $y, $option) {
  switch ($option) {
  case 1:
    return ($x + $y);
    break;
  case 2:
    return ($x - $y);
    break;
  case 3:
    return ($x * $y);
    break;
  case 4:
    return ($x / $y);
    break;
  default:
    echo "Digito una opcion incorrecta \n";
    return 0;
  }
}