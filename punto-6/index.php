<?php
//// DATOS DE ENTRADA CONSTANTE Y VARIABLE
$userName = "";
$age = 0;
//// PROCESO
echo "Ingrese el nombre del usuario: \n";
$user = readline();
echo "Edad del usuario: \n";
$age = readline();

//// DATOS DE SALIDA
if ($age >= 18) {  
    echo "El usuario $user es mayor de edad";
  
     } else {
    echo "El usurio $user no es mayor de edad";
     }
