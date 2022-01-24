<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Globales</title>
</head>
<body style="font-family: Verdana; font-size: 12px">
<?php 
    //Ambito superglobal
    $GLOBALS["url"] = "www.donaciones.com";
    function donar($monto){
        //ambito funcion
        $organizacion = "cruz roja";
        echo "<br>Donacion para: ".$organizacion;
        echo "<br> URL: ".$GLOBALS["url"];
        echo "<br>Monto: $ ".$monto;
    }
donar(100);
?>
</body>
</html>