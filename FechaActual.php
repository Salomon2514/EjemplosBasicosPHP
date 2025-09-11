<?PHP

//Fecha actual
$fecha = new DateTime("now", new DateTimeZone("America/Panama"));
echo $fecha->format("Y-m-d H:i:s"); // 2025-09-06 16:45:00

?>

