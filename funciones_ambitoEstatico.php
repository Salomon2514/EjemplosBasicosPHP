<?php


function staticScope() {
    static $staticVar = 0;
    $staticVar++;
    echo $staticVar;
}

staticScope(); // Imprime 1
echo "\n";
staticScope(); // Imprime 2
echo "\n";
staticScope(); // Imprime 3


?>
