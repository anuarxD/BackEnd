<?php

 echo "<br> <br>Practica 3 <br>";
 $playList = 
 array (
     array (
             "genero" => "hip-hop",
             "artista" => "John Williams",
             "titulo" => "My Girl",
            ),
    array (
            "genero" => "jazz",
            "artista" => "John Coltrane",
            "titulo" => "New York",
        ),
    array (
            "genero" => "hip-hop",
            "artista" => "Shakira",
            "titulo" => "Obsession",
        ),
       )  ;
       
       $hits = 
       array (
           array (
                   "genero" => "Hola",
                   "artista" => "Anuar",
                   "titulo" => "Prueba",
           ),
           array (
            "genero" => "Hello",
            "artista" => "Sugey",
            "titulo" => "Girl",
           )
             )  ;

             $existencia = array_merge($playList, $hits);
             array_walk_recursive($existencia, "imprimirArreglo");
    
             function imprimirArreglo($elemento, $indice){
                echo "<br> $indice". ": ". " <i> $elemento </i> <br>";
            }
           

?>