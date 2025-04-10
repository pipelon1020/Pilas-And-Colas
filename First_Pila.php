<?php
//  (FiFo)

$Pila = array();

array_push($Pila, 1);   //Se crea un Pilacon valores
array_push($Pila, 2);
array_push($Pila, 3);
array_push($Pila, 4);
array_push($Pila, 5);


$Elemento = array_pop($Pila);   // Se elimina el utlimo elemento de la Pila

array_push($Pila, 6);

echo("Ultimo elemento ingresado ". $Elemento. "<br>"); //se concatena con .
print_r($Pila);
//Se usa push and pop
?>