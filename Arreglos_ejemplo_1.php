<?php

$personas = array(
    array("Nombre" => "Juan", "Edad" => 25),
    array("Nombre" => "María", "Edad" => 30)
);


//1. Acceso y Modificación de Elementos:
    echo $personas[0]["Nombre"]; // Esto imprimirá "Juan"

    $personas[1]["Edad"] = 35; // Modifica la edad de María
    echo "<br>";
    echo $personas[1]["Edad"]; // Esto imprimirá 35      

    
 //2. Imprimer el número de elementos del arreglo multidimensional 
 echo "<br>";
    echo count($personas); // Esto imprimirá la cantidad de elementos (2)


        
 //3. Agrega un Nuevo Elemento al Arreglo
$nueva_persona = array("Nombre" => "Carlos", "Edad" => 28);
array_push($personas, $nueva_persona); // Agrega una nueva persona
print_r($personas); // Esto imprimirá el array modificado

 //4. Agrega un Nuevo Elemento al Arreglo
array_pop($personas); // Elimina la última persona
print_r($personas); // Esto imprimirá el array modificado

$nuevas_personas = array(
    array("Nombre" => "Laura", "Edad" => 32),
    array("Nombre" => "Pedro", "Edad" => 29)
);

$personas_completo = array_merge($personas, $nuevas_personas);
print_r($personas_completo); // Esto imprimirá el array combinado


  ?>