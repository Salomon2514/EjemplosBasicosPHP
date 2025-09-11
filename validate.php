<?PHP

//Sanitie and Validate name
$name = test_input($_POST["name"]);

$nameErr = "";

if (!preg_match("/^[a-zA-Z]*$/",$name)){
	$dnameErr = "Only letter and white space allowed";
}


function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);

	return $data;
}