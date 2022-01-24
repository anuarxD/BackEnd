<?php
include_once("../1.11FuncionesExternas/funciones_externas.php");
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
            float: left;
            padding-left: 20px;
        }

        .descuentos {
            clear: left;
        }
    </style>
    <title>Canasta</title>
</head>

<body style="font-family: Verdana; font-size: 12px">
    <h3>Mi canasta</h3>
    <form action="" name="album" method="post">
        <div class="album">
            <div class="portada">
                <img src="../src/CesariaEvora.jpg" alt="album" width="50px">
            </div>
            <div class="datos">
                Cesario Evora "Em Um Concerto" Precio: $99
                <input type="hidden" name="codigo[0]" value="001">
                <input type="hidden" name="artista[0]" value="Cesario">
                <input type="hidden" name="album[0]" value="Em Um Concerto">
                <input type="hidden" name="precio[0]" value="99">
                <input type="hidden" name="genero[0]" value="World"><br />
                Cantidad a Ordenar:
                <input type="number" size="2" maxlength="3" name="cantidad[0]" value="0" style="background-color: #f8ce6c;" />
            </div>
        </div>
        <div class="album">
            <div class="portada">
                <img src="../src/manuchao.jpg" alt="album" width="50px">
            </div>
            <div class="datos">
                Manu Chao "Clandestino" Precio: $95
                <input type="hidden" name="codigo[1]" value="002">
                <input type="hidden" name="artista[1]" value="Manu Chao">
                <input type="hidden" name="album[1]" value="Clandestino">
                <input type="hidden" name="precio[1]" value="95">
                <input type="hidden" name="genero[1]" value="Latin"><br />
                Cantidad a Ordenar:
                <input type="number" size="2" maxlength="3" name="cantidad[1]" value="0" style="background-color: #f8ce6c;" />
            </div>
        </div>
        <div class="descuentos">
            <br>
            <hr />
            Descuento: <br />
            <input type="checkbox" name="estudiante" value="15">
            Estudiante: 15% <br>
            <input type="checkbox" name="cliente" value="10">
            Cliente: 10% <br>

        </div>
        <div class="metodoPago">
            <br>

            Seleccione un medio de Pago: <br />
            <input type="text" placeholder="Metodo de Pago" name="pago" size="30" list="pago">
            <datalist id="pago">
                <option value="Visa"></option>
                <option value="Mastercard"></option>
                <option value="PayPal"></option>
                <option value="Ideal"></option>
            </datalist>
            <input type="submit" width="300px" name="enviar" value="Ordenar">
        </div>
        <hr />
    </form>

    <?php
 //Metodo de Pago
 
 if (isset($_POST["pago"])) {

    switch ($_POST["pago"]) {
        case "Visa":
            $pago = "Visa";
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
    
    $cantidad = 0;

    if (isset($_POST["album"][0])) {
        $cantidad = $_POST["cantidad"][0];
        //   echo $cantidad;
    }

   
   
    echo "Discos Ordenados: $cantidad";
    echo "<br>La funcion descuento: " . descuento()."%";
    echo "<br> El metodo de pago es: ". isset($pago);
    $medioDePago = isset($pago);
    $costoDeServicio = costoDelServicio($medioDePago);
    echo "<br>El costo del Servicio es de: $ $costoDeServicio <br><br/>";
 
    echo facturacion();
    
 
 
 ?>





</body>

</html>
