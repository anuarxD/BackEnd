<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form name="destinos" action="" method="post">
        <input type="text" placeholder="Ciudad de Destino" name="ciudad" size="30" list="ciudad">
        <datalist id="ciudad">
            <option value="Aguascalientes"></option>
            <option value="Durango"></option>
            <option value="Guadalajara"></option>
            <option value="León"></option>
            <option value="Monterrey"></option>
        </datalist>
        <input type="submit" value="enviar">
    </form>
</body>
</html>
<br><p>------------------------------------------------------</p>
<?php

if(isset($_POST["ciudad"])){
 
    
    switch ($_POST["ciudad"]) {
        case "Aguascalientes":
            echo "<p>Viaje Redondo desde $1500</p>";
            break;
        case "Durango":
            echo "<p>Viaje Redondo desde $1800</p>";
            break;
        case "Guadalajara":
            echo "<p>Viaje Redondo desde $1600</p>";
            break;
        case "León":
            echo "<p>Viaje Redondo desde $900</p>";
            break;
        case "Monterrey":
            echo "<p>Viaje Redondo desde $1900</p>";
            break;
        default:
            echo "<p>Seleccione un Destino Valido</p>";
            break;
    }
}

?>
