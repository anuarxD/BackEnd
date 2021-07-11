<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>

<body style="font-family: Verdana; font-size: 12px;">
    <h4>Consulta de Precios</h4>
    <form action="" method="post">
        <p>Seleccion un Viaje</p>
        Partida:
        <select name="salida" value="true">
            <option value=""></option>
            <option value="Durango">Durango</option>
            <option value="Monterrey">Monterrey</option>
            <option value="Guadalajara">Guadalajara</option>
        </select>
        Destino:
        <select name="destino" value="true">
            <option value=""></option>
            <option value="Durango">Durango</option>
            <option value="Monterrey">Monterrey</option>
            <option value="Guadalajara">Guadalajara</option>
        </select>
        <input type="submit" name="calcular" value="calcular">
    </form>

</body>

</html>

<?php

function consultaPrecio($salida, $destino)
{
    $precio = array();
    $precio['Durango'] = array();
    $precio['Guadalajara'] = array();
    $precio['Monterrey'] = array();



    $precio['Monterrey']['Monterrey'] = 0;
    $precio['Monterrey']['Durango'] = 500;
    $precio['Monterrey']['Guadalajara'] = 900;

    $precio['Durango']['Monterrey'] = 500;
    $precio['Durango']['Durango'] = 0;
    $precio['Durango']['Guadalajara'] = 600;

    $precio['Guadalajara']['Monterrey'] = 900;
    $precio['Guadalajara']['Durango'] = 600;
    $precio['Guadalajara']['Guadalajara'] = 0;

    return ($precio[$salida][$destino]);
}
?>
<?php



if (isset($_POST["calcular"])) {

    if (isset($_POST['salida']) && isset($_POST['destino'])) {
        $salida = $_POST["salida"];
        $destino = $_POST["destino"];
        $precio = consultaPrecio($salida, $destino);
        echo ("Precio de $salida a $destino es: $ $precio ");
    }
}

?>