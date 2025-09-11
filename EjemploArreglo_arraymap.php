<?PHP 

function cube($n){
	
	return ($n * $n * $n);
}

$a = array(1,2,3, 4);

$b = array_map("cube",$a);

print_r($b);


$nombres = ["ana","pedro", "maria"];

$mayusculas = array_map("strtoupper", $nombres);
print_r($mayusculas);


?>