<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 15</title>
</head>
<body>
    <h3>Compara la fecha de hoy con los dias que faltan para navidad de este 2022</h3>
<?php


//date_diff
$Navidad = date_create("2022-12-25");
$hoy = date_create("now");

echo "<br> El día de hoy es: ".date_format($hoy, "Y-m-d");
$intervalo = date_diff($hoy, $Navidad);
echo "<br> Faltan días para transcurrir:  ". $intervalo->format("%R%a días hasta la Navidad");

?>
</body>
</html>

