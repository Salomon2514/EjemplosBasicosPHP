<?php 
$a = $_POST["func"];
$texto = $_POST["text"]; 

if ($a == "") { 
	echo "has de hacer la selección"; 
	 } 

	 $result = $a($texto); 
	
	$detected = mb_detect_encoding($result, ["UTF-8", "ISO-8859-1", "ASCII"]);
	$textoUTF8 = mb_convert_encoding($texto, "UTF-8", $detected);
	echo $textoUTF8;

	 

	  ?>
