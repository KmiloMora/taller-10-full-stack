<?php
  include "./passwordCheck.php";

//DATOS DE ENTRADA
$user = "";
$password = "";

//PROCESO
echo "Digite su usuario a registrar \n";
$user = readline();

echo "Digite su contraseña a registrar \n";
$password = readline();

if (hasSecurityLong($password)) {
  if(hasUpperLetter($password)) {
    if(hasNumber($password)) {
      echo "Felicitaciones su contraseña es segura \n";
    }else{
      echo "Su contraseña no cumple con numeros \n";
    }
    
    }else{
    echo "Su contraseña no contiene letras mayusculas \n";
    }
  
} else {
  echo "Su contraseña no cumple con una longitud segura \n";
}
?>