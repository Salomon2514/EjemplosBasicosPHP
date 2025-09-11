<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Documento sin título</title> 
</head> 
<?php 
/* Escribimos el título de la ventana deseado y con un script de JavaScript y mezclando PHP lo mandamos cambiar */ 
$nombre_titulo="los mejores ejemplos en PHP"; ?>

<script languaje="Javascript">
window.document.title ="<?PHP echo $nombre_titulo;?>"
</script>
<body>
</body>
</HTML>
