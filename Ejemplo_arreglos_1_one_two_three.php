<?php

$array = ['one', 'two','three'];
$array_lenght = count($array);

for ($i= 0; $i< $array_lenght; ++$i)
{
    echo $array[$i];
    echo "<br>";
}

echo "\n\n\n";
foreach($array as $element){
    echo $element;
    echo "<br>";
}

?>