<?php
//¿Cómo pasar una variable por referencia?
//Así que cuando una función trata un parámetro como una referencia
//lo que hace es modificar la variable original.
//El resultado de esta función es ‘GORKA’, porque al tratar el 
//parámetro como una referencia lo que hacemos es modificar la 
//variable original $nombre.


function mayusculas(&$valor)
{
    $valor = strtoupper($valor);
}//fin de la función 

$nombre = 'Gorka';

mayusculas($nombre);

echo $nombre;

?>