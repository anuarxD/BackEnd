<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Ejemplo de Formulario</h3>
    <form action="procesamiento.php" method="POST">
    <input type="text" name="nombre" size="30" placeholder="Su nombre">
    <input type="hidden" name="idioma" value=""><br>
    Seleccione un Idioma:
    Español: <input type="radio" name="idioma" value="E">
    Holandés:  <input type="radio" name="idioma" value="H">
    Inglés:  <input type="radio" name="idioma" value="I">
    <input type="submit" name="enviar" value="Enviar">
   
    </form>
</body>
</html>