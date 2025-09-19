<?php

$mi_array = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "Arreglo en la Posición 1, 2:::".$mi_array[1][2];
echo "<br>";
//También puedes utilizar ciclos anidados para recorrer el array 
//y realizar operaciones en cada uno de sus valores. Por ejemplo, el 
//siguiente código imprime todos los valores en $mi_array:*/
//Recorrido estilo Excel Fila Columna
for ($i = 0; $i < count($mi_array); $i++) {
    for ($j = 0; $j < count($mi_array[$i]); $j++) {
        echo $mi_array[$i][$j] . " <br>";
    }
    echo "<br>";
}

?>