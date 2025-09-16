
<?php
function mayusculas(&$nombre)
{
    $nombre = strtoupper($nombre);
}

mayusculas('Gorka'); // Maaaaal

echo $nombre;

?>