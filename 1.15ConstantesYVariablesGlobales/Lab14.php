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
    global $correoElectronico;
    $correoElectronico = "webmaster@donaciones.com";

    //Constantes Globales
    define ("CONTRIBUCION_ESTATAL",0.10);
    function donar($monto){
        
        //ambito funcion
        $organizacion = "cruz roja";
        echo "<br>Donacion para: ".$organizacion;
        echo "<br> URL: ".$GLOBALS["url"];
        global $correoElectronico;
        echo "<br>Correo Electronico: ". $correoElectronico;
        echo "<br>Monto: $ ".$monto;
        $contribucion = $monto * CONTRIBUCION_ESTATAL;
        $donacion = $monto + $contribucion;
        echo "<br/> Incluida la contribución Estatal ".$donacion;
        static $saldo;
        $saldo = $saldo + $donacion;
        echo "<p style='background-color:yellow'>Saldo Actual: $saldo</p>";
    }
donar(1000);
donar(100);
donar(33333);
?>
</body>
</html>