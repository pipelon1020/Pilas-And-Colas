<?php
//  LiFo)
$Cola = array();

array_push($Cola, 1);   //Se anaden elementos con array_push
array_push($Cola, 2);
array_push($Cola, 3);
array_push($Cola, 4);
array_push($Cola, 5);
array_push($Cola, 6);
array_push($Cola, 7);

$Borrar = array_shift($Cola); //Elimina el ultimo valor de la Cola

echo "Se elimino el primero valor de la Cola que es:". $Borrar;

echo "<br>Los valores que quedaron en la Cola son:<br>";
print_r($Cola);

//Se usa push and Shift
?>