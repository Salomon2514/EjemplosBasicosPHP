    <?php
    // Continue
    $next_car = [
        "Porsche 911",
        "Ferrari F355",
        "Mitsubishi EVO",
        "R34 Skyline",
        "C8 Corvette"
    ];

    echo "While Loop<br>";

    $i = 0;

    while ( $i < count($next_car) ) {

        if ( $next_car[$i++] != "R34 Skyline" ) {
            echo $i."<br>";
            continue;
        }
        
        echo "That's right. I'm getting a skyline.<br>";
    }

    echo "Do While Loop<br>";

    ?>