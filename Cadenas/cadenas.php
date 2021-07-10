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
    echo '<body style = "font-family:Verdana; font-size:12px;">'; 
        $nombre = htmlspecialchars($_POST["nombre"]);
        $direccion = htmlspecialchars($_POST["direccion"]);
        $ciudad = htmlspecialchars($_POST["ciudad"]);
        $codigoPostal = htmlspecialchars($_POST["codigo_postal"]);
        $correo = htmlspecialchars($_POST["correo"]);
        $comentario = htmlspecialchars($_POST["comentario"]);
        
        //metodo TRIM emlimina espacios en blanco al principio y al final de una cadena 

        $nombre = trim($nombre);
        $direccion = trim($direccion);
        $ciudad = trim($ciudad);
        $codigoPostal = trim($codigoPostal);
        $correo = trim($correo);
        $comentario = trim($comentario);

        $ciudad = strtoupper($ciudad); //Pone todo en MAYUSCULAS
            if ($ciudad == "DURANGO") {
                $costoDeEnvio = 10.00;
            }
            elseif ($ciudad == "MONTERREY") {
                $costoDeEnvio = 20.00;
            }
            else{
                $costoDeEnvio = 30.00;
            }

        $correo = strtolower($correo); //Pone todo en minusculas
        $nombre = ucfirst($nombre); //Pone la primeras letra en Mayusculas

        $arreglo = explode("@",$correo); //Divide la cadena con el caracter indicado
        $usuario = $arreglo[0];
        $dominio = $arreglo[1];

        if (strlen($codigoPostal) != 5) { //STRLEN indica numero de caracteres
            $codigoPostal = "Incorrecto";
        }

        $prefijo = substr($codigoPostal,0,2);
        $sufijo = substr($codigoPostal,2,3);

        $com = strpos($correo,".com");
        $gob = strpos($correo,".gob");
        $edu = strpos($correo,".edu");

        if ($com > 0) { $prov = "com";}
        if ($gob > 0) { $prov = "gob";}
        if ($edu > 0) { $prov = "edu";}

        $comentario = nl2br ($comentario); //nl2br ayuda a poner los comentarios con los saltos de linea

        $insultos = array("imbecil","tonto","Puto","cobarde", "pendejo");
        $comentario = str_replace($insultos, "$%&!$",$comentario);
    }

    echo "<br> Nombre: $nombre";
    echo "<br> Costo de Envío: $costoDeEnvio";
    echo "<br> el correo es: $correo";
    echo "<br> el el proveedor es: $prov";
    echo "<br> el usuario es: $usuario";
    echo "<br> el dominio es: $dominio";
    echo "<br> el codigo postal es: $codigoPostal";
    echo "<br> el Prefijo del codigo postal es: $prefijo";
    echo "<br> el Sufijo del codigo postal es: $sufijo";
    echo "<br> $comentario"
    
?>