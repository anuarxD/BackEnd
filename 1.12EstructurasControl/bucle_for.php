<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle For</title>
</head>
<body>
    <h1>Ejemplo del bucle For</h1>
    <?php 
        echo "Deseamos que el bluche-for ejecute 10 iteraciones<br/>";
        echo "Comenzando desde el INICIO....<br/>";

        for ($contador=0; $contador < 10; $contador++) { 
            echo "Esto es la iteración $contador <br/>";
        }
    echo "TERMINACIÓN...<br/>";
    
    //Ejercicio Realiza ocho iteraciones comenzando de la quinta del bucle for 

    echo "Deseamos que el bluche-for ejecute 8 iteraciones comenzando de la quinta<br/>";
    echo "Comenzando desde el INICIO....<br/>";

    for ($contador=0; $contador < 10; $contador++) { 
        
        if ($contador > 4) {
            echo "Esto es la iteración $contador <br/>";
        }
        
    }
echo "TERMINACIÓN...<br/>"




    ?>
</body>
</html>