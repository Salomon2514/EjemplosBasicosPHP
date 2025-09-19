
<?php
function processData(array $data, callable $callback) {
    $result = array();

    foreach ($data as $item) {
        $result[] = call_user_func($callback, $item);
    }

    return $result;
}

function doubleData(mixed $item) {
    return $item * 2;
}

function tripleData(mixed $item) {
    return $item * 3;
}

$data = [1, 2, 3, 4, 5];

$resultDouble = processData($data, 'doubleData');
print_r($resultDouble);

$resultTriple = processData($data, 'tripleData');
print_r($resultTriple);
?>