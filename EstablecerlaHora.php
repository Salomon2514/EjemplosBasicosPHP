<?php
// Establecer zona horaria con putenv
//putenv("TZ=America/Panama");
date_default_timezone_set("America/Panama");

// Mostrar la hora actual
echo "Hora en Panamá: " . date("Y-m-d H:i:s") . "\n";
?>