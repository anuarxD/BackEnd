<?php

$carta = "

Estimado <b> <<Suscriptor>> </b>

Usted a recibido el ultimo número de la revista ... <br>

Como realmente bla bla bla ... queremos <b> ofrecer el descuento de 65 pesos </b><br>

";
$suscriptor = "<<Suscriptor>>";


$carta = str_replace($suscriptor, "Jose", $carta);
        echo $carta;

?>