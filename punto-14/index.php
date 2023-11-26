<?php
include "./password.php";

//// DATOS DE ENTRADA VARIABLES
$userName = "";
$userPassword = "";

//// PROCESO
echo "Ingrese su usuario a registrar:  \n";
$userName = readline();

echo "Digite la contraseña a regristrar \n";
$userPassword = readline();

//// DATOS DE SALIDA 
numberPassword($userPassword);
letterPassword($userPassword);
hasNumberPassword($userPassword);