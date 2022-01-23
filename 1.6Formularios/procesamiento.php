<?php
if (isset($_POST["enviar"])) {
    if (empty($_POST["nombre"])) {
        echo "Favor de ingresar su nombre";
    }else{
        $nombre = $_POST["nombre"];
        $idioma = $_POST["idioma"];
        if ($idioma == "E") {
            echo "Buenos días ".$nombre;
        }
        elseif ($idioma == "I") {
            echo "Good Morning ".$nombre;
        } 
        elseif ($idioma == "H"){
            echo "Goede morgen ".$nombre;
        }
        else{
            echo "Selecciona un idioma ".$nombre;
        }
        
    }    
}


?>