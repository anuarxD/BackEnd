<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ancho = 10;
        $longitud = 11;
        $alto = 5;

        $area = $ancho * $longitud;
        $volumen = $area * $alto;

        echo "El Area de la figura es: $area <br>
        El volumen de la figura es $volumen"; 
    ?>
</body>
</html>