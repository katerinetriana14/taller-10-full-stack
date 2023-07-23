<?php
//funcion para determinar si el usuario es mayor de edad
function esMayorDeEdad($edad) {
    return $edad >= 18;
}

//obtener los datos del usuario 
$nombre = "katerine"; 
$edad = 25;

if ($edad) {
    $mensaje = "Hola, $nombre. Eres Mayor de Edad.";
} else {
    $mensaje = "Hola, $nombre. Eres menor de Edad.";
}

//Mostrar el mensaje
echo $mensaje;
?>
