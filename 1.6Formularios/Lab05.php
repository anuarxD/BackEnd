<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Formulario de Inscripcion</h3>
    <form action="Lab05procesamiento.php" method="POST">
    <input type="text" name="apellido" size="30" placeholder="Apellido"><br>
    <input type="text" name="nombre" size="30" placeholder="Nombre"><br>
    <input type="text" name="direccion" size="30" placeholder="Direccion"><br>
    <input type="text" name="cp" size="30" placeholder="Codigo Postal"><br>
    <input type="text" name="ciudad" size="30" placeholder="Ciudad" list="ciudad">
    <datalist id="ciudad">
    <option value="Quintana Roo">
    <option value="Yucatan">
    <option value="México">
    <option value="Puebla">
    </datalist>
    <br>
    <input type="email" name="correo" size="30" placeholder="Correo Electronico"> <br>
    <input type="hidden" name="curso" value=""><br>
    Seleccione un curso: <br><br>
    Informatica <input type="radio" name="curso" value="I"><br>
    Historia:  <input type="radio" name="curso" value="H"><br>
    Economía:  <input type="radio" name="curso" value="E"><br>
    <input type="submit" name="enviar" value="Enviar"><br>
   
    </form>
</body>
</html>