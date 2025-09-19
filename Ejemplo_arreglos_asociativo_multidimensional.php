<?php

$employe = [

    'name' => 'John',
    'email' => 'john@example.com',
    'hobbies' => ['Football', 'Tennis'],
    'profiles' => ['facebook'=>'johnfb', 'twitter'=> 'johntw']
    
];

//access hobbies

echo $employe['hobbies'][0];

echo "\n";
echo $employe['hobbies'][1];

echo "\n";
echo $employe['profiles']['facebook'];
?>