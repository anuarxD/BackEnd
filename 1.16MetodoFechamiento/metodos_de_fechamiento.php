<?php

//Formateo
$formateo = '%A %d %B %Y %H:%M:%S';
$fechaFormateada = strftime($formateo);
echo "<br>  Fecha Formateada: " .$fechaFormateada; 
//tiempo local
setlocale(LC_TIME, "es-MX");
$mex = strftime($formateo);
echo "<br>  Fecha y tiempo local en español: " .$mex; 
echo "<br>" . time();
echo "<br>" . mktime(0,0,0,1,1,2000);

$hoy = new DateTime("now");
echo "<br> Segundos Transcurridos desde 01/01/1970 " .
$hoy->getTimestamp();
echo "<br>";

$fecha = new DateTime("1/1/2000");
echo $fecha->getTimestamp()."<br>";

$unDia = 86400;
$inicio2000 = DateTime::createFromFormat("d/m/Y", "1/1/2000");
$fin2000 = DateTime::createFromFormat("d/m/Y","31/12/2000");
$inicio = $inicio2000->getTimestamp();
$fin = $fin2000->getTimestamp();
$diasEnEl2000 = ($fin - $inicio)/$unDia;
echo "<br> El año 2000 contó $diasEnEl2000 días"; 

//date Format

$dosmil = date_create("2000/01/01");

echo "<br> Fecha formateada: 'Y-m-d' ".date_format($dosmil, "Y-m-d");
echo "<br> Fecha formateada: 'd-m-Y' ".date_format($dosmil, "d-m-Y");
echo "<br>";
//agregar intervalo
$fecha = new DateTime("now");
$fecha->add(new DateInterval("P10D"));
echo "<br> Fecha mas diez días: ". $fecha->format("Y-m-d");
//Substraer intervalo
$fecha->sub(new DateInterval("P20D"));
echo "<br> Fecha menos diez días: ". $fecha->format("Y-m-d");

//date_diff
$factura = date_create("2022-02-10");
echo "<br> Fecha de la factura es: ".date_format($factura, "Y-m-d");
$hoy = date_create("now");
echo "<br> Fecha de hoy es: ".date_format($hoy, "Y-m-d");
$intervalo = date_diff($hoy, $factura);
echo "<br> le Restan:  ". $intervalo->format("%R%a dias para pagar");

?>