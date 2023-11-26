<?php

function numberPassword($pass) {
  $lenght = strlen($pass);
  if ($lenght >= 8) {
    echo "Su contraseña cumple con la logitud, es valida \n";
  }else {
    echo "Su contaseña no cumple con la longitud, no es valida \n";
  }
}

function letterPassword($pass) {
  $arrayPass = str_split($pass);
  foreach ($arrayPass as $word) {
    if (ctype_upper($word)) {
      echo "Su contraseña posee mayusculas, es valida \n";
      return true;
    }
  }
  echo "Su contraseña no posee mayusculas, no es valida \n";
  return false;
}

function hasNumberPassword($pass) {
  $arrayPass = str_split($pass);
  foreach ($arrayPass as $word) {
    if (is_numeric($word)) {
      echo "Su contraseña cuenta con numeros, es valida";
      return true;
    }
  }
  echo "Su contraseña no cuenta con numeros, no es valida";
  return false;
}