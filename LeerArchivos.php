<?PHP
if (file_exists("mifichero.txt")) {
    echo "El fichero existe.";
    //bre el archivo en modo "a" → append (agregar).
    $reffichero = fopen("mifichero.txt", "a");
} else {
    echo "El fichero no existe. Lo creo.";
    //Usa fopen("mifichero.txt", "w+").
    //Si existe → lo borra y lo recrea vacío.
	//Permite tanto lectura como escritura
    $reffichero = fopen("mifichero.txt", "w+");
}

fclose($reffichero);


/*👉 Qué hace: fclose($reffichero);
Cierra el archivo que fue abierto previamente con fopen().
$reffichero es el recurso de archivo que devuelve fopen().
Cuando cierras con fclose(), le dices a PHP y al sistema operativo:
✅ "Ya no voy a usar este archivo."
✅ Libera la memoria usada por el puntero al archivo.
✅ Se aseguran de que todos los datos pendientes en buffer se escriban en el disco (muy importante si usaste fwrite()).*/
?>