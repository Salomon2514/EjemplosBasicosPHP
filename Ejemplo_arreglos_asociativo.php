<?php 

$employe = [

    'name'=> 'John',
    'email'=> 'john@example.com',
    'phone'=> '12345'

];

echo $employe['name'];
echo "\n";
//get all values

foreach ($employe as $key => $value)
{
    echo $key.":".$value;
    echo "\n";
}
?>