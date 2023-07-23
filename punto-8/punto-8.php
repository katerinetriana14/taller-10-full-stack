<?php
// VARIABLES DE ENTRADA
const TICKET_PRICE =25000;
$membershipType = "";
$personNumber = 0;

//PROCESO
echo "Ingrese su tipo de afiliacion: ";
fscanf (STDIN, "%s", $membershipType);
echo "Ingrese el numero de personas: ";
fscanf (STDIN, "%d", $personNumber);

$totalpay = $personNumber * TICKET_PRICE ;

if ($membershipType == "A") {$totalpay = $totalpay - ($totalpay * 0.3); } 

if ($membershipType == "B" ) {$totalpay = $totalpay - ($totalpay * 0.25); } 

if ($membershipType == "C" ) {$totalpay = $totalpay - ($totalpay * 0.1); } 

if ($membershipType == "D" ) {$totalpay = $totalpay - ($totalpay * 0.05); } 

echo "El total a pagar es:" . $totalpay;

?> 
