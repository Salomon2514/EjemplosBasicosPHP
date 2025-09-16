<?PHP

$num = 7;

function cambiarValor(&$number){
    echo  ++ $number."<br>";

}
echo "Primer echo ".$num."<br>";
cambiarValor($num);

echo $num;

?>
