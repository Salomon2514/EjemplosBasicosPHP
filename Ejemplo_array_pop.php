<?PHP
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
echo "Elemento eliminado: " . $fruit . "<br>";
echo "Arreglo resultante: ";
print_r($stack);

?>