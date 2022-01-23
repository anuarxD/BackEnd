<?php

$horasLaboradas = 50;
$tarifa = 15.00;
$bono = 100.00;
$bruto = $horasLaboradas * $tarifa;

if ($horasLaboradas <= 40) {
    //echo "Su Salario base es: $ ".$bruto;
    //echo "<br> Su impuesto es: $" . 0.40*$bruto;
    echo "El impuesto es del 40%";
}
if ($horasLaboradas > 40) {
    //echo "Su Salario base es: $ ". ($bruto+$bono);
    //echo "<br> Su impuesto es: $" . 0.45*($bruto+$bono);
    echo "el impuesto es de 45%";
} else {
    # code...
}
echo "<br><br><br><br><br>" ;

$calificacion = 4;
$aprovado = $calificacion > 5.5 ? "Si" : "No";
echo $aprovado;

?>