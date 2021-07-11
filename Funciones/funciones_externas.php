<?php

function descuento(){
    $descuento = 0;
    if (isset($_POST['estudiante'])) $descuento = $descuento + 15;
    if (isset($_POST['cliente'])) $descuento = $descuento + 10;
    return ($descuento."%");
}

function costoDelServicio($medioDePago){
        switch ($_POST["pago"]) {
            case "Visa":
                $costoDelServicio = 10;
                break;
            case "Mastercard":
                $costoDelServicio = 12;
                break;
            case "PayPal":
                $costoDelServicio = 14;
                break;
            case "Ideal":
                $costoDelServicio = 16;
                break;
            default:
                $pago =  "Seleccione una forma de Pago";
                break;
        }
    return($costoDelServicio);
    
}
?>