<?php

$next_car = [
    "Porsche 911",
    "Subaru STi",
    "Ferrari F355",
    "Mitsubishi EVO",
    "R34 Skyline",
    "C8 Corvette"
];

echo "For Loop<br>";

for ( $i = 0; $i < count($next_car); $i++ ) {

    if ( $next_car[$i] == "Subaru STi" ) {
        continue;
    }

    echo "The " . $next_car[$i] . " is definitely a possibility...with enough subscribers.<br>";
}

echo "finalizón.<br>";
?>