<?php //recupero mediante POST

if (isset($_POST['color_rojo'])){ 
$rojo = $_POST['color_rojo']; 
}else $rojo = "";

$azul = $_POST['color_azul']; 


if (isset($_POST['color_azul'])){ 
$azul = $_POST['color_azul']; 
}else $azul = "";



if (isset($_POST['color_verde'])){ 
$verde = $_POST['color_verde']; 
}else $verde = "";

 
echo $rojo.'<br>'; 
echo $azul.'<br>'; 
echo $verde.'<br>';

?>
