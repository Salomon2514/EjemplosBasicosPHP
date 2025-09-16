<?PHP

$num = 7;
//Paso por Referencia
function cambiarValor(&$number){
    echo  ++ $number."<br>";

}
echo "Primer echo ".$num."<br>";
cambiarValor($num);

echo $num;

?>
