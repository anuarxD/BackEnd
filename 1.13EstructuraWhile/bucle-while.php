<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While-lus</title>
</head>

<body style="font-family: verdana; font-size:12px">
    <h3>Ejemplo del Bucle While</h3>
    <?php
        echo "<br> Siempre que nuestro saldo sea menor a 2000, queremos que el bucle while
        calcule nuestro saldo mensual.";
        $saldo = 750;
        $renta = 0.1;
        $mes = 1;
        echo "<br/> Saldo Inicial es:". $saldo;
        echo "<br> INICIO";
        while ($saldo <= 2000) {
            $saldo = $saldo + ($saldo * $renta);
            $saldo = sprintf("%0.2f", $saldo);
            echo "<br> en el mes: $mes su saldo es: $saldo";
            $mes++;
        }
        echo "<br> Nuestro saldo Excede los 2000. TERMINACION"




    ?>?
</body>

</html>