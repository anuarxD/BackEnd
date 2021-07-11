<?php
include_once("funciones_externas.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .album {
            clear: left;
            width: 100%;
        }

        .portada {
            clear: left;
            float: left;
        }

        .datos {
            clear: left;
            padding-left: 20px;
        }

        .descuentos {
            clear: left;
        }
    </style>
    <title>Canasta</title>
</head>

<body >
    <h3>Mi canasta</h3>
    <form action="" name="album" method="post">
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

            </div>

            <input type="text" placeholder="Metodo de Pago" name="pago" size="30" list="pago">
            <datalist id="pago">
                <option value="Visa"></option>
                <option value="Mastercard"></option>
                <option value="PayPal"></option>
                <option value="Ideal"></option>
            </datalist>


        </div>
        <input type="submit" width="300px" name="enviar" value="Ordenar">
    </form>

    <?php

    $pago = "";
    $cantidad = 0;

    if (isset($_POST["album"][0])) {
        $cantidad = $_POST["cantidad"][0];
        //   echo $cantidad;
    }

        //Metodo de Pago
    if (isset($_POST["pago"])) {

        switch ($_POST["pago"]) {
            case "Visa":
                $pago = "visa";
                break;
            case "Mastercard":
                $pago = "Mastercard";
                break;
            case "PayPal":
                $pago = "Paypal";
                break;
            case "Ideal":
                $pago = "Ideal";
                break;
            default:
                $pago =  "Seleccione una forma de Pago";
                break;
        }
    }

    echo "Discos Ordenados: $cantidad";
    echo "<br>La funcion descuento(): ". descuento();
    echo "<br> El metodo de pago es: $pago";
    $medioDePago = $pago;
    $costoDeServicio = costoDelServicio($medioDePago);
    echo "<br>El costo del Servicio es de: $ $costoDeServicio";
    ?>


</body>

</html>