<?php
$libros = 
array (
    array (
            "titulo" => "Stoner",
            "autor" => "John Williams",
            "genero" => "Ficcion",
            "precio" => 19.99
    ),
        array (
            "titulo" => "El Circulo",
            "autor" =>  "Dave Eggers",
            "genero" => "Ficcion",
            "precio" => 22.50
        ),
        array (
            "titulo" => "Rayuela",
            "autor" => "julio Cortazar",
            "genero" => "Ficcion",
            "precio" => 25.50
        )    
      )  ;

      echo "Lab 04: Lista de Precios<br>";
      $precio = array_column($libros,"precio");
      array_walk_recursive($precio, "listaDePrecios");
    
      function listaDePrecios($elemento, $indice){
        echo "$indice". ": ". " <i> $elemento </i> <br>";
    }

?>