<?php 
// DECLARACION DE VARIABLES DE ENTRADA

$firstName = "katerine";
$lastName = "triana";

// PROCESO
echo " ingresa nombre del usuario:";
fscanf(STDIN, "%d", $firstName);
echo "ingresa apellido del usuario:";
fscanf(STDIN, "%d", $lastName);

$var =  "$firstName $lastName" ;

// SALIDA
echo "Nombre completo:" . $var ; 
?>

