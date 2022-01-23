<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .album{clear: left;width: 100%;}
        .portada{clear: left; float: left;}
        .datos{clear: left; padding-left: 20px;}
        .descuentos{clear: left; }
    </style>
    <title>Canasta</title>
</head>
<body style="font-family: Verdana; font-size: 12px">
<h3>Mi canasta</h3>
<form action="" name= "album" method="post">
    <div class="album">
        <div class="portada">
            <img src="img/album.jpg" alt="album" width="50px">
        </div>
        <div class="datos">
            Prueba de texto con un precio de $99.9
            <input type="hidden" name="codigo[0]" value="001">
            <input type="hidden" name="artista[0]" value="Anuar">
            <input type="hidden" name="album[0]" value="Prueba">
            <input type="hidden" name="precio[0]" value="99.9">
            <input type="hidden" name="genero[0]" value="ROCK"><br>
            Cantidad a Ordenar:
            <input type="number" size="2" maxlength="3" name="cantidad[0]" value="0" style="background-color: #f8ce6c;">
        </div>
        <div class="descuento">
            <br>
            <hr>
        Descuento: <br />
        <input type="checkbox" name="estudiante" value="15">
        Estudiante: 15% <br>
        <input type="checkbox" name="cliente" value="10">
        Cliente: 10% <br>
        <input type="submit" width="300px" name="enviar" value="Ordenar">
        

        </div>
    
    </div>
</form>
    
<?php
if (isset($_POST["album"][0])) {
    $cantidad = $_POST["cantidad"][0];
 //   echo $cantidad;
}

if (isset($_POST["estudiante"]))
$estudiante = $_POST["estudiante"];
else{
    $estudiante = 0;
}
 
if (isset($_POST["cliente"]))
$cliente = $_POST["cliente"];
else{
    $cliente = 0;
}
        
$descuento = $estudiante + $cliente; 

echo "Discos Ordenados: $cantidad";
echo "<br>Descuento de: $descuento %";
?>


</body>
</html>