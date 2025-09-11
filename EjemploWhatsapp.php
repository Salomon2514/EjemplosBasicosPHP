<?php
// Configura la codificación de caracteres en la respuesta HTTP
header('Content-Type: text/html; charset=UTF-8');

$web = "https://www.google.es"; // ejemplo de web
$mensaje = "Fisik necesita tu ayuda. Haz clic en el enlace para saber más: " . $web;

// Codificamos el texto para que sea válido en la URL
$mensajeCodificado = urlencode($mensaje);

// Generamos el enlace oficial de WhatsApp
$enlaceWhatsapp = "https://wa.me/?text=" . $mensajeCodificado;

// Mostramos el botón como una imagen
echo '<a href="' . $enlaceWhatsapp . '" target="_blank">
        <img src="compartir.png" width="31px" height="31px" 
             style="float: left; margin-left: 10px;" alt="Compartir en WhatsApp">
      </a>';
?>