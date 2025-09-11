<?PHP
/*Fuente*/
/*https://www.tiempoexacto.com/post/seguro-social-y-seguro-educativo-en-panam%C3%A1-qu%C3%A9-debes-saber-como-empleador  */

//La deducción que se aplica al salario del empleado es de 1.25% de manera mensua
//Trabajadores: Se les descuenta el 9.75% de su salario mensual.
//Trabajadores: Se les descuenta el 1.25% de su salario mensual.

//Aplicar estos descuentos en base a estas fórmulas.


$SalarioTrabajador = 1500; $Impuesto = 7; 
//Porcentaje 
$SueldoReal = $SalarioTrabajador - (($SalarioTrabajador / 100) * $Impuesto); 

echo "Sueldo del trabajador sin impuesto: $SalarioTrabajador<br>"; 
echo "Con el impuesto: $SueldoReal";

?>

