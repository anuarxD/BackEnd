<?php

$horasLaboradas = 40;
$tarifa = 15.00;
$bono = 100.00;
$bruto = $horasLaboradas * $tarifa;

if($horasLaboradas <=40){
    echo "Su salario base es: $".$bruto;
    echo "<br/> Su Impuesto es: $". 0.40*$bruto;
}elseif($horasLaboradas >40){
    echo "Su salario base es: $".$bruto+$bono;
    echo "<br/> Su Impuesto es: $". 0.45*($bruto+$bono);
}

$impuesto = ($horasLaboradas <= 40 ) ? "El impuesto es de 40%" : "el impuesto es de 45%" ;
echo "<br>".$impuesto;


?>