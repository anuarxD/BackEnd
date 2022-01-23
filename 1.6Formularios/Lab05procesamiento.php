<?php
if (isset($_POST["enviar"])) {
    if (empty($_POST["nombre"])) {
        echo "Favor de ingresar su nombre";
    }else{
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $direccion = $_POST["direccion"];
        $cp = $_POST["cp"];
        $ciudad = $_POST["ciudad"];
        $correo = $_POST["correo"];
        $curso = $_POST["curso"];
        if ($curso == "H") {
            echo "<h1>Datos de Inscripcion</h1><br>
            Apellido: .$apellido. <br> 
            Nombre: .$nombre. <br>
            Direccion: .$direccion. <br>
            Codigo Postal: .$cp. <br>
            Ciudad: .$ciudad. <br>
            Correo Electronico: .$correo. <br>
            Usted se a inscrito al Curso: Historia <br>    
         " ;  
        }
        elseif ($curso == "I"){
            echo "<h1>Datos de Inscripcion</h1><br>
            Apellido: .$apellido. <br> 
            Nombre: .$nombre. <br>
            Direccion: .$direccion. <br>
            Codigo Postal: .$cp. <br>
            Ciudad: .$ciudad. <br>
            Correo Electronico: .$correo. <br>
            El Curso de Informatica esta lleno, seleccione Otro <br>    
         " ;  
        }
        elseif ($curso == "E"){
            echo "<h1>Datos de Inscripcion</h1><br>
            Apellido: .$apellido. <br> 
            Nombre: .$nombre. <br>
            Direccion: .$direccion. <br>
            Codigo Postal: .$cp. <br>
            Ciudad: .$ciudad. <br>
            Correo Electronico: .$correo. <br>
            Usted se a inscrito al Curso: Economia  <br>    
         " ;
        }  
        else{
            echo "Selecciona un Curso ".$nombre;
        }
        
    }    
}


?>