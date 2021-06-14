<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>php lab 2</h3>
    <?php
        $alumno1 = "Anuar";
        $geometria1 = 8.5;
        $ingles1 = 7.7;
        $matematicas1 = 6.7;
        $programacion1 = 8.5;
        $baseDeDatos1 = 9.4;
        $promedio1 = round(($geometria1 + $ingles1 + $matematicas1 + $programacion1 + $baseDeDatos1)/5,1);

        $alumno2 = "Sugey";
        $geometria2 = 8.9;
        $ingles2 = 8.7;
        $matematicas2 = 9.7;
        $programacion2 = 9.5;
        $baseDeDatos2 = 9.2;
        $promedio2 = round(($geometria2 + $ingles2 + $matematicas2 + $programacion2 + $baseDeDatos2)/5,1);
        
        $promedioGeneral = round(($promedio1 + $promedio2)/2,1);
        echo("
        <table border='1'>
        <caption>
            <strong> Boleta de Calificaciones</strong>
        </caption>
        <thead>
            <tr><th>Alumno</th>
            <th>Geometria</th>
            <th>Ingles</th>
            <th>Matemáticas</th>
            <th>Programción</th>
            <th>Base de Datos</th>
            <th>Pormedio</th></tr>
        </thead>
        <tbody>
        <tr>
            <th>$alumno1</th>
            <th>$geometria1</th>
            <th>$ingles1</th>
            <th>$matematicas1</th>
            <th>$programacion1</th>
            <th>$baseDeDatos1</th>
            <th> $promedio1</th>
        </tr>
        <tr>
        <th>$alumno2</th>
        <th>$geometria2</th>
        <th>$ingles2</th>
        <th>$matematicas2</th>
        <th>$programacion2</th>
        <th>$baseDeDatos2</th>
        <th>$promedio2</th>
    </tr>
        </tbody>
        <tfoot>
            <tr><td colspan='6'>Promedio del Grupo</td>
            <td>$promedioGeneral</td></tr>
        </tfoot>
        </table>");   
    ?>
</body>
</html>