<?php

//1. Ámbito Global:
//Una variable con un ámbito global se declara fuera de cualquier función o método 
//y está disponible en todo el script. Esto significa que se puede acceder a la 
//variable desde cualquier parte del código, ya sea dentro de una función,
//un bucle o incluso desde un archivo externo incluido en el script. 
//Para declarar una variable global en PHP, se utiliza la palabra clave
//global seguida del nombre de la variable. Veamos un ejemplo:

$globalVar = 10;

function myFunction() {
    global $globalVar;
    echo $globalVar; // Imprime 10
}

myFunction();
echo "Probando: ".$globalVar."\n";

?>