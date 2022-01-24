<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle-Foreach</title>
</head>
<body>
    <h3>Ejemplo de Bucle-Foreach</h3>
    <?php

    $colores["naranja"]="orange";
    $colores["rojo"]="red";
    $colores["violeta"]="violet";
    $colores["verde"]="green";
    $colores["azul"]="blue";
    $colores["amarillo"]="yellow";

        foreach ($colores as $color) {
            echo "<br><font color= $color> Este texto se imprime en $color";
        }

        foreach ($arreglo as &$valor) {
            $valor =0;
        }

?>
</body>
</html>