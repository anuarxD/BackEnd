<?php
$nombre = "Anuar";
$direccion = "Calle Conocida #123";
$ciudad = "Chetumal";

$datos = $nombre ." ". $direccion . " ". $ciudad;
echo "Datos: $datos";

echo <<<TextoLargo
<br><br> Salario Asignado para $nombre: 2000 euros
<br> Mes: Noviembre
<br> Año: 2009
<br>
<br>
TextoLargo;

//Ejercicio 1.6

$dolares = 999.99;
$tipoCambio = 1.2;
$euro = round($dolares * $tipoCambio,2);


echo "El importe en Euros es: $euro";


?>