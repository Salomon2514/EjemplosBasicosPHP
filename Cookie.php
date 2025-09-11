<?PHP
//Crear y Leer una Cookie
$datos = "Hola Mundo";
setcookie("yo",$datos);
?>
<HTML>
<HEAD>
<title>Test Cookie </title>
</HEAD>
<body>
<h1>Se ha creado la cookie <?PHP echo $_COOKIE["yo"];?> </h1>

</body>
</HTML>