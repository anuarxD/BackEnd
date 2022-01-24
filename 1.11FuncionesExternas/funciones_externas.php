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

function descuento(){
    $descuento = 0.0;
    if (isset($_POST['estudiante'])) $descuento = $descuento + 15;
    if (isset($_POST['cliente']))  $descuento = $descuento + 10;
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

function facturacion(){
    $pago=0;
    $total = 0;
    echo " <table border='1'>
    <caption>
        <strong> Factura</strong>
    </caption>
    <thead>
        <tr>
        <th>Genero</th>
        <th>Artista</th>
        <th>Album</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Importe</th>
        </tr>
    </thead> ";
    for ($x=0; $x < sizeof($_POST["codigo"]) ; $x++) { 
        
        $importe = ($_POST["cantidad"][$x] * $_POST["precio"][$x]);
        echo "
        <tbody>
        <td>"; print_r ($_POST["genero"][$x]); echo"</td>
        <td>"; print_r ($_POST["artista"][$x]); echo"</td>
        <td>"; print_r ($_POST["album"][$x]); echo"</td>
        <td>"; print_r ($_POST["cantidad"][$x]); echo"</td>
        <td>"; print_r (($_POST["precio"][$x])); echo"</td>
        <td> $importe </td>
        </tbody>";  
        $total = $total + $importe;
        
        
    }
   
    $descuento = (descuento()/100)*$total;
    $medioDePago = $pago;
    $costoDeServicio = costoDelServicio($medioDePago);
    $aPagar = $total - $descuento + $costoDeServicio;
    echo "<tfoot>
    <tr><td colspan='5'>Total</td><td>$total</td></tr>
    <tr><td colspan='5'>Descuento</td><td>$descuento</td></tr>
    <tr><td colspan='5'>Costo de Servicio</td><td>$costoDeServicio</td></tr>
    <tr><td colspan='5'>A pagar</td><td>$aPagar</td></tr>
    
</tfoot>
</table>";



}

?>