<?php
//FUNCIONES PARA REALIZAR LAS OPERACIONES
function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Error: no se puede dividir por cero.";
    }
    return $a / $b;
}
//OPERACION
$numero1 = 5;
$numero2 = 2;
$operacion = "multiplicacion";

//SOLUCION
$resultado = 0;
switch ($operacion) {
    case "suma":
        $resultado = suma ($numero1, $numero2);
        break;
     case "resta":
        $resultado = resta ($numero1, $numero2);
        break;
     case "multiplicacion":
        $resultado = multiplicacion ($numero1, $numero2);
        break;
     case "division":
        $resultado = division ($numero1, $numero2);
        break;
    default:
        echo "operacion invalida.";
        exit;
}

//Mostrar Resultado
echo "Resultado de la operacion: $resultado";
?>
