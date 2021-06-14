<?php
    echo "<br> Ejercicio 1.7 <br>";
    $articulo = [];
    $articulo[0] = "Libros" ;
    $articulo[1] = "CDs" ;
    $articulo[2] = "Revistas";
    $articulo[3] = "DVDs" ;

    echo "<br> <br>Ejercicio 1.8 PRINT_R <br>";
     print_r($articulo) ;
     
     echo "<br> <br>Ejercicio 1.9 VAR_DUMP <br>";
     var_dump($articulo);

     echo "<br> <br>Ejercicio 1.10 UNSET <br>";
     unset($articulo[2]);
     print_r($articulo);

     echo "<br> <br>Ejercicio 1.11 ARRAY_KEY_EXISTS <br>";
     $existencia = array_key_exists(1,$articulo);
     echo "Existe el Indice 1? = $existencia";

     echo "<br> <br>Ejercicio 1.12 IN_ARRAY<br>";
     $existencia2 = in_array("Libros",$articulo);
     echo "Existe el valor Libros? = $existencia2";

     echo "<br> <br>Ejercicio 1.13 ARRAY_SEARCH<br>";
     $existencia3 = array_search("DVDs",$articulo);
     echo "El valor DVDs es el indice? = $existencia3";
     
     echo "<br> <br>Ejercicio 1.14 ARRAY_PUSH<br>";
     array_push($articulo, "Laptop", "Tabletas");
     print_r($articulo);

     echo "<br> <br>Ejercicio 1.15 ARRAY_POP<br>";
     $ultimoElemento = array_pop($articulo);
     print_r($articulo);
     echo "<br>$ultimoElemento"; //ultimo elemento extraido del array con array_pop

     echo "<br> <br>Ejercicio 1.16 ARRAY_SHIFT<br>";
     $eliminado = array_shift($articulo);
     print_r($articulo); //Muestra todos los elementos, menos el eliminado
     echo "<br>$eliminado"; //primer elemento extraido del array con array_shift

     echo "<br> <br>Ejercicio 1.17 ARRAY_UNSHIFT<br>";
     array_unshift($articulo, "TV", "Stereos"); //Agrega elementos al principio del arreglo
     print_r($articulo); //
     
     echo "<br> <br>Ejercicio 1.18 ARRAY_RAND<br>";
     $nuevoArreglo = array_rand($articulo, 2);
     echo "Primer Elemento Aleatoreo: " . $articulo[$nuevoArreglo[0]];
     echo "<br>Segundo Elemento Aleatoreo: " . $articulo[$nuevoArreglo[1]];
     
     echo "<br> <br>Ejercicio 1.19 ARRAY_WALK<br>";
        function imprimirArreglo($elemento, $indice){
            echo "<br> $indice". ": ". " <i> $elemento </i> <br>";
        }
        array_walk($articulo, 'imprimirArreglo');
     
    echo "<br> <br>Ejercicio 1.20 METODO IMPLODE<br>";
    $numeros = ["cero","uno","dos","tres","cuatro","cinco",];
    $herramientas = ["libro","lapiz","laptop",];
    $texto1 = implode("*", $numeros);
    $texto2 = implode("|" , $herramientas );
        echo $texto2;
    
    echo "<br> <br>Ejercicio 1.21 METODO EXPLODE<br>";    
        $arreglo1 = explode("*", $texto1);
        $arreglo2 = explode("|", $texto2);
        print_r ($arreglo1);

    echo "<br> <br>Ejercicio 1.22 ARREGLOS ASOCIATIVO DE DOS DIMENSIONES<br>";
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

    // print_r($libros)
    echo "<br> <br>Ejercicio 1.23 METODO ARRAY_WALK_RECURSIVE<br>";    
    array_walk_recursive($libros, "imprimirArreglo");  //nos apoyamos de la funcion imprimirArrelgos 


    echo "<br> <br>Ejercicio 1.24 METODO ARRAY_MERGE<br>"; //combinacion de dos arreglos
    $nuevasEdiciones = array(
        array(
            "titulo" => "Poesias",
            "autor" => "Sor Juana Ines de la Cruz",
            "genero" => "Poesia",
            "precio" => 12.99
        )
        );
$existencia = array_merge($libros, $nuevasEdiciones);
array_walk_recursive($existencia, "imprimirArreglo");

    echo "<br> <br>Ejercicio 1.25 METODO ARRAY_SLICE<br>";
    $descontinuados = array_slice($existencia, 1,1);
    array_walk_recursive($descontinuados, "imprimirArreglo");
?>