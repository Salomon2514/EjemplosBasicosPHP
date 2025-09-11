<?php 
//Ejemplo 1 básico 
function saluda($a){ 
echo $a .": Bienvenido a PHP .<BR>"; 
}
 
 saluda("PEDRO"); 
//************************** //Ejemplo 2 con cálculos 
function media($a,$b){ 
	return($a+$b)/2; 
}//fin de la función media 

echo "La media es ".media(10,2)."<br>";

?>
