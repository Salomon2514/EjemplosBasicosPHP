<?php


function staticScope() {
    static $staticVar = 0;
    $staticVar++;
    echo $staticVar;
}

staticScope(); // Imprime 1
staticScope(); // Imprime 2
staticScope(); // Imprime 3
echo $staticVar;

?>
