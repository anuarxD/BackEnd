<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>

<body>
    <form name="form" action="" method="post">
        <input require type="text" name="nombre" placeholder="Nombre"><br>
        <input require type="text" name="direccion" placeholder="Diección"><br>
        <input require type="text" name="ciudad" placeholder="Ciudad"><br>
        <input require type="text" name="codigo_postal" placeholder="Codigo Postal"><br>
        <input require type="email" name="correo" placeholder="Correo Electronico"><br>
        <textarea name="comentario" placeholder="Escriba aquí su comentario..." rows="4"></textarea><br>
        <input type="submit" name="enviar" value="enviar"><br>
    </form>
    
</body>
</html>

<?php

if (isset($_POST["enviar"])) {
    echo '<body style = "font-family:Verdana; font-size:12px;">', 
        $nombre = htmlspecialchars($_POST["nombre"]);
        $direccion = htmlspecialchars($_POST["direccion"]);
        $ciudad = htmlspecialchars($_POST["ciudad"]);
        $codigoPostal = htmlspecialchars($_POST["codigo_postal"]);
        $correo = htmlspecialchars($_POST["correo"]);
        $comentario = htmlspecialchars($_POST["comentario"]);
        
        //metodo TRIM emlimina espacios en blanco de una cadena 

        $nombre = trim($nombre);
        $direccion = trim($direccion);
        $ciudad = trim($ciudad);
        $codigoPostal = trim($codigoPostal);
        $correo = trim($correo);
        $comentario = trim($comentario);

    }
?>