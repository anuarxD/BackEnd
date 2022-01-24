<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do-While-Luz</title>
</head>

<body style="font-family: verdana; font-size:12px">
    <h3>Ejemplo de bucle-Do-While</h3>
    
<?php
    echo "<br>Calcula el saldo siempre que el mismo sea menor que 2000";
    $saldo = 2100;
    $renta = 0.1;
    $mes = 1;
    echo "<br> Saldo Inicial es de: ".$saldo;
    echo "<br>INICIO...";
    do{
        $saldo = $saldo + ($saldo*$renta);
        $saldo = sprintf("%0.2f", $saldo);
        echo "<br>En el mes: $mes su saldo es: $saldo";
        $mes++;
    }while($saldo<2000);
        echo "<br> TERMINACION";
    


?>

</body>

</html>