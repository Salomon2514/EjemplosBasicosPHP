<?PHP
/* Los 150 mejores ejemplos
0.7 Detecta y saluda en el idioma del usuario que visita en mi web*/
$mi = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

//$mystring = 'abc';
//$findme   = 'a';
//$pos = strpos($mystring, $findme);


 if (strpos($mi, 'es') === 0) 
 { 
 echo "Bienvenido a mi página web"; } 
 else { echo "Welcome to my page web";
  } 


?>